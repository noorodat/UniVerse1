<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Instructor;
use App\Models\Course;
use App\Models\CourseStudent;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Move this to paypal
    // Check if u can improve the performence by passing the whole course in the hidden input and use the relation between it and the instructor
    // Handle that the user can't buy the same course twice
    public function buyCourse(Request $request) {
        try {

            if (CourseStudent::where('course_id', $request->input('courseID'))->where('student_id', $request->input('studentID'))->exists()) {
                return redirect()->back()->with('error', 'You already have this course.');
            }
            CourseStudent::create([
                'course_id' => $request->input('courseID'),
                'student_id' => $request->input('studentID'),
                'instructor_id' => $request->input('instructorID'),
            ]);

            $instructor = Instructor::findOrFail($request->input('instructorID'));
            $course = Course::findOrFail($request->input('courseID'));
            $instructor->earnings += $course->price;
            $instructor->save();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
