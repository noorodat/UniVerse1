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

    public function createCourse(Request $request) {
        $course_title = $request->input('courseTitle');
        $course_description = $request->input('courseDescription');
        $course_price = $request->input('coursePrice');
        $course_department = $request->input('department');
        $course_preview_method = $request->input('previewVideoMethod');
        $course_preview_youtube = $request->input('youtubeURL');
        $course_first_topic = $request->input('introTopic');
        $instructor_id = $request->input('instructor');

        $imageName = $this->uploadCourseImage($request);

        if($course_preview_method == 'youtube') {
            $course_preview = $course_preview_youtube;
        } else {
            $course_preview = $this->uploadCoursePreview($request);
        }

        $course = Course::create([
            'title' => $course_title,
            'image' => $imageName,
            'preview_video' => $course_preview,
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

        $this->uploadCourseIntroTopic($request, $course->id, $course_first_topic);

        // Edit instructor record
        $instructor = Instructor::find($instructor_id);
        $instructor->courses_number++;
        $instructor->save();

        return redirect()->route('go-home');

    }

    public function uploadCourseIntroTopic($request, $course_id, $course_first_topic) {
        $topic = CourseCurriculum::create([
            'title' => $course_first_topic,
            'course_id' => $course_id,
            'number_of_videos' => 1,
            'number_of_files' => 1,
            'duration' => 0,
        ]);

        $this->uploadCourseMaterials($request, $course_id, $topic->id);
    }

    // Can be used for intro and for usual uploading
    public function uploadCourseMaterials(Request $request, $course_id, $topic_id) {
        CourseMaterial::create([
            'course_id' => $course_id,
            'video' => $this->uploadCourseVideo($request),
            'file' => $this->uploadCourseFile($request),
            'curriculum_id' => $topic_id,
        ]);
    }

    public function uploadCourseVideo(Request $request) {
        if ($request->hasFile('courseVideo')) {
            $video = $request->file('courseVideo');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);
        }
        return $videoName;
    }

    public function uploadCourseFile(Request $request) {
        if ($request->hasFile('courseFile')) {
            $file = $request->file('courseFile');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/files'), $fileName);
        }
        return $fileName;
    }

    public function uploadCourseImage(Request $request) {
        if ($request->hasFile('courseImage')) {
            $image = $request->file('courseImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        return $imageName;
    }

    public function uploadCoursePreview(Request $request) {
    
        if ($request->hasFile('localVideo')) {
            $video = $request->file('localVideo');
            $videoName = time() . '.' . $video->getClientOriginalExtension();
            $video->move(public_path('uploads/videos'), $videoName);
        }
        return $videoName;
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
