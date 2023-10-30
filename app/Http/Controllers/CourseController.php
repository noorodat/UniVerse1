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

            // Check if the course belongs to the instructor that wants to show the course
            // if yes then call the function (showInstructorCourse)

            $instructor = Instructor::where('user_id', Auth::user()->id)->first();

            if($instructor !== null) {
                // Call showInstructorCourse Here
                dd("YESYES");
            }

            $videoUrl = $course->preview_video; // Get the video URL from your course model

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
            
            return view('pages.courses.course-details', compact('course', 'relatedCourses', 'isEnrolled', 'previewType', 'courseTopics', 'topicsWithMaterials'));    
    }

    // Make the course editable in this page
    public function showInstructorCourse(Course $course) {

    }

    public function showUnlockedCourse(Course $course) {
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
