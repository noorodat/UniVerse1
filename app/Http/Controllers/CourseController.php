<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\CourseCurriculum;
use App\Models\CourseMaterial;
use App\Models\Department;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use getID3;


class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        $departments = Department::all();
        return view('pages.courses.index', compact('courses', 'departments'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        $videoUrl = $course->preview_video; // Get the video URL from your course model

        if (strpos($videoUrl, 'youtube.com') !== false) {
            $previewType = 'youtube';
        } else {
            $previewType = 'local';
        }

        $isEnrolled = false;

        if (Auth::check()) {
            $studentWithCourse = CourseStudent::where('course_id', $course->id)
                ->where('student_id', Auth::user()->id)
                ->first();

            if ($studentWithCourse) {
                $isEnrolled = true;
            }
        }

        $department = $course->department;
        $relatedCourses = Course::where('department_id', $department->id)
            ->where('id', '!=', $course->id)
            ->get();

        $courseTopics = CourseCurriculum::where('course_id', $course->id)->get();

        $topicsWithMaterials = array();

        foreach ($courseTopics as $courseTopic) {
            $courseMaterials = CourseMaterial::where('course_id', $course->id)
                ->where('curriculum_id', $courseTopic->id)
                ->get();

            $topicsWithMaterials[$courseTopic->title] = $courseMaterials;
        }

        if (Auth::check()) {
            $instructor = Instructor::where('user_id', Auth::user()->id)->first();

            if ($instructor !== null) {
                return view('pages.courses.instructor-course-details', compact('course', 'relatedCourses', 'isEnrolled', 'previewType', 'courseTopics', 'topicsWithMaterials'));
            }
        }

        return view('pages.courses.course-details', compact('course', 'relatedCourses', 'isEnrolled', 'previewType', 'courseTopics', 'topicsWithMaterials'));
    }

    public function showUnlockedCourse(Course $course)
    {
        $videoUrl = $course->preview_video;

        if (strpos($videoUrl, 'youtube.com') !== false) {
            $previewType = 'youtube';
        } else {
            $previewType = 'local';
        }

        $isEnrolled = false;
        $studentWithCourse = CourseStudent::where('course_id', $course->id)
            ->where('student_id', Auth::user()->id)
            ->first();

        if ($studentWithCourse) {
            $isEnrolled = true;
        }

        $department = $course->department;
        $relatedCourses = Course::where('department_id', $department->id)
            ->where('id', '!=', $course->id)
            ->get();

        $courseTopics = CourseCurriculum::where('course_id', $course->id)->get();

        $topicsWithMaterials = array();

        foreach ($courseTopics as $courseTopic) {
            $courseMaterials = CourseMaterial::where('course_id', $course->id)
                ->where('curriculum_id', $courseTopic->id)
                ->get();

            $topicsWithMaterials[$courseTopic->title] = $courseMaterials;
        }

        // foreach($topicsWithMaterials as $topicTitle => $topicCollection) {
        //     dd($topicCollection);
        // }

        return view('pages.courses.course-unlocked', compact('course', 'relatedCourses', 'isEnrolled', 'previewType', 'courseTopics', 'topicsWithMaterials'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $topicTitle = request()->input('topicTitle');
        $file = request()->input('collection');
        $fileName = request()->input('file_name');

        return view('pages.courses.edit', compact('course', 'topicTitle', 'file', 'fileName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCourseContent(Request $request, Course $course, $topic_name, $tmpFileName)
    {
        $topicTitle = $request->input('topic_title');
        $fileName = $request->input('file_name');
        $file = $request->input('old_file_content');
        $new_file = $request->input('new_file_content');

        // Edit the topic's name
        $topic = CourseCurriculum::where('course_id', $course->id)
            ->where('title', $topic_name)->first();

        $topic->title = $topicTitle;
        $topic->save();

        // Edit the material's name
        $material = CourseMaterial::where('course_id', $course->id)
            ->where('curriculum_id', $topic->id)
            ->where(function ($query) use ($tmpFileName) {
                $query->where('file_name', $tmpFileName)
                    ->orWhere('video_name', $tmpFileName);
            })
            ->first();


        if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
            $material->file_name = $fileName;
            $pdf_name = updateFile($request, 'new_file_content', 'uploads/files', $material->file, 'file');
            $material->file = ($pdf_name == NULL ? $material->file : $pdf_name);
            $material->save();
        } else {
            $material->video_name = $fileName;
            $videoInfo = updateFile($request, 'new_file_content', 'uploads/videos', $material->video, 'video');
            $video_name = ($videoInfo == NULL ? $material->video : $videoInfo['videoName']);
            $video_duration = ($videoInfo == NULL ? $material->video_duration : $videoInfo['duration']);
            $material->video = $video_name;
            $material->video_duration = $video_duration;
            $material->save();
        }

        flash()->addSuccess('Content updated successfully');
        return redirect()->route('course.show', $course);
    }

    public function showEditCoursePreview(Course $course)
    {
        return view('pages.courses.edit-preview', compact('course'));
    }

    public function editCoursePreview(Request $request, Course $course)
    {

        $oldCourseImage = $request->input('oldCourseImage');
        $oldCourseVideo = $request->input('oldCourseVideo');
        $coursePrice = $request->input('coursePrice');
        $courseDescription = $request->input('courseDescription');

        $imageName = updateFile($request, 'courseImage', 'images', $oldCourseImage, 'image');
        $videoInfo = updateFile($request, 'courseVideo', 'uploads/videos', $oldCourseVideo, 'video');


        $course->image = ($imageName == NULL ? $oldCourseImage : $imageName);
        $course->preview_video = ($videoInfo == NULL ? $oldCourseVideo : $videoInfo['videoName']);
        $course->price = $coursePrice;
        $course->description = $courseDescription;

        $course->save();

        return redirect()->route('course.show', $course);
    }

    public function showAddCourseContent(Course $course)
    {
        return view('pages.courses.add-course-content', compact('course'));
    }

    public function addCourseContent(Request $request, Course $course)
    {

        $topicName = $request->input('topicName');
        $videoTitle = $request->input('videoTitle');
        $fileTitle = $request->input('fileTitle');

        $videoInfo = uploadFile($request, 'topicVideo', 'uploads/videos', 'video');
        if($videoInfo !== NULL) {
            $videoName = $videoInfo['videoName'];
            $videoDuration = $videoInfo['duration'];
        }
        $fileName = uploadFile($request, 'topicFile', 'uploads/files', 'file');

        if ($videoInfo == NULL && $fileName == NULL) {
            return redirect()->back()->with('fileErrorMessage', 'One file at least must be added');
        } else if($topicName == NULL) {
            return redirect()->back()->with('topicNameEmpty', 'Topic name is empty');
        }

        $courseTopic = CourseCurriculum::create([
            'title' => $topicName,
            'course_id' => $course->id,
            'duration' => 0,
            'number_of_videos' => 1,
            'number_of_files' => 1,
        ]);


        CourseMaterial::create([
            'video_name' => $videoInfo != NULL ? $videoTitle : NULL,
            'video_duration' => $videoInfo != NULL ? $videoDuration : NULL,
            'file_name' => $fileName != NULL ? $fileTitle : NULL,
            'video' => $videoInfo != NULL ? $videoName : NULL,
            'file' => $fileName != NULL ? $fileName : NULL,
            'course_id' => $course->id,
            'curriculum_id' => $courseTopic->id,
        ]);

        $course->number_of_lessons++;

        $course->save();


        return redirect()->route('course.show', $course);
    }

    public function showAddContentToTopicPage($course, $courseTopic)
    {
        return view('pages.courses.add-content-to-topic', compact('course', 'courseTopic'));
    }

    public function addContentToTopic(Request $request, $courseID, $topicTitle)
    {

        $topic = CourseCurriculum::where('title', $topicTitle)->first();

        $videoTitle = $request->input('videoTitle');
        $fileTitle = $request->input('fileTitle');

        $validator = Validator::make($request->all(), [
            'videoTitle' => $request->file('topicVideo') != NULL ? 'required' : '',
            'fileTitle' => $request->file('topicFile') != NULL ? 'required' : '',
        ]);

        if ($validator->fails()) {
            flash()->addError('A title must be added for the File/Video');
            return redirect()->back();
        }

        $videoInfo = uploadFile($request, 'topicVideo', 'uploads/videos', 'video');
        $fileName =  uploadFile($request, 'topicFile', 'uploads/files', 'file');


        // If the user didnt add anything
        if ($videoInfo == NULL && $fileName == NULL) {
            flash()->addError('one file must be added');
            return redirect()->back();
        }

        if($videoInfo !== NULL) {
            $videoName = $videoInfo['videoName'];
            $videoDuration = $videoInfo['duration'];
        }

        CourseMaterial::create([
            'video_name' => $videoInfo !== NULL ? $videoTitle : null,
            'video_duration' => $videoInfo !== NULL ? $videoDuration : null,
            'file_name' => $fileName !== NULL ? $fileTitle : null,
            'video' => $videoInfo !== NULL ? $videoName : null,
            'file' => $fileName !== NULL ? $fileName : null,
            'course_id' => $courseID,
            'curriculum_id' => $topic->id,
        ]);

        $course = Course::find($courseID);

        flash()->addSuccess('Content added successfully');
        return redirect()->route('course.show', $course);
    }

    public function deleteCourseContent($id)
    {
        $mats = CourseMaterial::find($id);
        $pathToDelete = $mats->video ?? $mats->file;
        deleteFile($pathToDelete);
        $mats->delete();
        flash()->addSuccess('Content Deleted Successfully');
        return redirect()->back();
    }

    public function deleteCourseTopicPage($courseID, $topicTitle) {
        return view('pages.courses.delete-topic-confirmation', compact('courseID', 'topicTitle'));
    }

    public function deleteCourseTopic(Request $request, $courseID, $topicTitle) {
        if($request->input('topicTitleConfirmation') !== $topicTitle) {
            flash()->addError('Typo with the topic title');
            return redirect()->back();
        }
        else {
            $courseTopic = CourseCurriculum::where('title', $topicTitle)->where('course_id', $courseID)->first();
            // dd($courseTopic);
            $topicMats = CourseMaterial::where('curriculum_id', $courseTopic->id)->where('course_id', $courseID)->get();
            if($topicMats) {
                foreach($topicMats as $topicMat) {
                    $pathToDelete = $topicMat->file ?? $topicMat->video;
                    deleteFile($pathToDelete);
                    $topicMat->delete();
                }
            }
            $courseTopic->delete();
            $course= Course::find($courseID);
            $course->number_of_students--;
            $course->save();
            flash()->addSuccess('Topic deleted');
            return redirect()->route('course.show', $course);
        }
    }

}
