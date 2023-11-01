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
use getID3;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        // return view('admin-dashboard.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin-dashboard.courses.add-course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
            
            $pdf_content = $file;
            $video_content = $file;

        if (pathinfo($file, PATHINFO_EXTENSION) == "pdf") {
            $material->file_name = $fileName;
            $pdf_name = $this->uploadFile($request, $pdf_content);
            $material->file = $pdf_name;
            $material->save();
        } else {
            $material->video_name = $fileName;
            $videoInfo = $this->uploadVideo($request, $video_content);
            $video_name = $videoInfo["videoName"];
            $video_duration = ['duration'];
            $material->video = $video_name;
            $material->video_duration = $video_duration;
            $material->save();
        }

        return redirect()->route('course.show', $course);
    }

    public function showEditCoursePreview(Course $course) {
        return view('pages.courses.edit-preview', compact('course'));
    }

    public function editCoursePreview(Request $request, Course $course) {

        $oldCourseImage = $request->input('oldCourseImage');
        $oldCourseVideo = $request->input('oldCourseVideo');
        $coursePrice = $request->input('coursePrice');
        $courseDescription = $request->input('courseDescription');

        $imageName = $this->uploadImage($request, $oldCourseImage);
        $videoInfo = $this->uploadVideo($request, $oldCourseVideo);


        $course->image = $imageName;
        $course->preview_video = $videoInfo['videoName'];
        $course->price = $coursePrice;
        $course->description = $courseDescription;

        $course->save();

        return redirect()->route('course.show', $course);

    }

    public function uploadFile(Request $request, $pdfName) {
        $fileName = $pdfName;
        if ($request->hasFile('new_file_content') || $request->hasFile('topicFile')) {
            $file = $request->file('new_file_content') ?? $request->file('topicFile');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $fileName);
        }
        return $fileName;
    }

    // Upload the video with it's duration
    public function uploadVideo(Request $request, $video_name) {
        $videoName = $video_name;
        if ($request->hasFile('courseVideo') || $request->hasFile('new_file_content') || $request->hasFile('topicVideo')) {
            $video = $request->file('courseVideo') ?? $request->file('new_file_content') ?? $request->file('topicVideo');           
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);

            // Get the vido duration
            $path = public_path('uploads/videos/' . $videoName);
            $duration = $this->getVideoDuration($path);
        }
        return [
            'videoName' => $videoName,
            'duration' => $duration,
        ];
    }
    public function uploadImage(Request $request, $image_name) {
        $imageName = $image_name;
        if ($request->hasFile('courseImage')) {
            $image = $request->file('courseImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }

    public function showAddCourseContent(Course $course) {
        return view('pages.courses.add-course-content', compact('course'));
    }   

    public function addCourseContent(Request $request, Course $course) {

        $topicName = $request->input('topicName');
        $videoTitle = $request->input('videoTitle');
        $fileTitle = $request->input('fileTitle');

        // $videoInfo = $this->uploadVideo($request, $video_content);
        // $video_name = $videoInfo["videoName"];
        // $video_duration = ['duration'];
        // $material->video = $video_name;
        // $material->video_duration = $video_duration;
        $videoInfo = $this->uploadVideo($request, "");
        $videoName = $videoInfo['videoName'];
        $videoduration = $videoInfo['duration'];
        $fileName = $this->uploadFile($request, "");

        if($videoName == "" && $fileName == "") {
            return redirect()->back()->with('fileErrorMessage', 'One file at least must be added');        
        }

        $courseTopic = CourseCurriculum::create([
            'title' => $topicName,
            'course_id' => $course->id,
            'duration' => 0,
            'number_of_videos' => 1,
            'number_of_files' => 1,
        ]);


        CourseMaterial::create([
            'video_name' => $videoName != "" ? $videoTitle : null,
            'video_duration' => $videoName != "" ? $videoduration : null,
            'file_name' => $fileName != "" ? $fileTitle : null,
            'video' => $videoName != "" ? $videoName : null,
            'file' => $fileName != "" ? $fileName : null,
            'course_id' => $course->id,
            'curriculum_id' => $courseTopic->id,
        ]);


        return redirect()->route('course.show', $course);

    }

    public function getVideoDuration($videoPath)
    {
        $getID3 = new \getID3;
        $file = $getID3->analyze($videoPath);
    
        if (isset($file['playtime_seconds'])) {
            $playtime_seconds = $file['playtime_seconds'];
    
            // Format the duration as "00:00"
            $formattedDuration = gmdate('i:s', $playtime_seconds);
            
            return $formattedDuration;
        } else {
            // Handle the case where 'playtime_seconds' is not set in the $file array.
            // You may want to return a default value or throw an exception.
            return 'N/A'; // Example: Return 'N/A' for "Not Available"
        }
    }
    
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
