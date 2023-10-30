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
            $pdf_name = $this->getFileName($request, $pdf_content);
            $material->file = $pdf_name;
            $material->save();
        } else {
            $material->video_name = $fileName;
            $video_name = $this->getFileName($request, $video_content);
            $material->video = $video_name;
            $material->save();
        }

        return redirect()->route('course.show', $course);
    }

    public function getVideoName(Request $request, $video_name) {
        $videoName = $video_name;
        if ($request->hasFile('new_file_content')) {
            $video = $request->file('new_file_content');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);
        }
        return $videoName;
    }

    public function getFileName(Request $request, $pdfName) {
        $fileName = $pdfName;
        if ($request->hasFile('new_file_content')) {
            $file = $request->file('new_file_content');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $fileName);
        }
        return $fileName;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
