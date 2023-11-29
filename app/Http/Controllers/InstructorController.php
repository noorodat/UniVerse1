<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\CourseCurriculum;
use Illuminate\Http\Request;
use App\Models\Department;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function createCourse(Request $request)
    {

        $course_title = $request->input('courseTitle');
        $course_description = $request->input('courseDescription');
        $course_price = $request->input('coursePrice');
        $course_department = $request->input('department');
        $course_preview_method = $request->input('previewVideoMethod');
        $course_preview_youtube = $request->input('youtubeURL');
        $course_first_topic = $request->input('introTopic');
        $instructor_id = $request->input('instructor');

        $imageName = uploadFile($request, 'courseImage', 'images', 'image');

        if ($course_preview_method == 'youtube') {
            $course_preview = $course_preview_youtube;
        } else {
            $course_preview = uploadFile($request, 'localVideo', 'uploads/videos', 'video');
        }

        $course = Course::create([
            'title' => $course_title,
            'image' => $imageName,
            'preview_video' => is_array($course_preview) ? $course_preview['videoName'] : $course_preview,
            'description' => $course_description,
            'duration' => 0,
            'number_of_lessons' => 1,
            'number_of_students' => 0,
            'price' => $course_price,
            'rating' => 0,
            'status' => 1,
            'instructor_id' => $instructor_id,
            'department_id' => $course_department,
        ]);

        $department = Department::find($course_department);

        $department->number_of_courses++;
        $department->save();


        $this->uploadCourseIntroTopic($request, $course->id, $course_first_topic);

        // Edit instructor record
        $instructor = Instructor::find($instructor_id);
        $instructor->courses_number++;
        $instructor->save();
        flash()->addSuccess('Course Created Successfully!');
        return redirect()->route('go-home');
    }

    public function uploadCourseIntroTopic($request, $course_id, $course_first_topic)
    {
        $topic = CourseCurriculum::create([
            'title' => $course_first_topic,
            'course_id' => $course_id,
            'number_of_videos' => 1,
            'number_of_files' => 1,
            'duration' => 0,
        ]);

        if($this->uploadCourseMaterials($request, $course_id, $topic->id)) {
            $topic->number_of_files = 0;
            $topic->save();
        }

    }

    // Can be used for intro and for usual uploading
    public function uploadCourseMaterials(Request $request, $course_id, $topic_id)
    {
        $videoInfo = uploadFile($request, 'courseVideo', 'uploads/videos', 'video');
        $fileName = uploadFile($request, 'courseFile', 'uploads/files', 'file');
        CourseMaterial::create([
            'course_id' => $course_id,
            'video' => $videoInfo['videoName'],
            'video_name' => $request->input('videoTitle'),
            'file_name' => $request->input('fileTitle'),
            'video_duration' => $videoInfo['duration'],
            'file' => $fileName,
            'curriculum_id' => $topic_id,
        ]);
        if($fileName == NULL) {
            return true;
        }
        return false;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Instructor $instructor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Instructor $instructor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Instructor $instructor)
    {
        //
    }
}
