<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Course;

class HomePageController extends Controller
{
    // Show elements in the home page
    public function index()
    {
        $departments = Department::all();

        $randomCourses = Course::inRandomOrder()->limit(6)->get();

        return view('index', compact('departments', 'randomCourses'));
    }

    public function showSingleCourse(Course $course)
    {
        try {
            $department = $course->department;
            $relatedCourses = Course::where('department_id', $department->id)
                ->where('id', '!=', $course->id)
                ->get();
            return view('pages.courses.course-details', compact('course', 'relatedCourses'));
        } catch (\Exception $e) {
            return view("Sorry, Some error happened :(");
        }
    }
}
