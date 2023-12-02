<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Course;
use App\Models\CourseMaterial;
use App\Models\User;
use App\Models\Instructor;
use App\Models\CourseStudent;

class HomePageController extends Controller
{
    // Show elements in the home page
    public function index()
    {
        $departments = Department::all();

        $randomCourses = Course::inRandomOrder()->limit(6)->get();

        $counts = [
            'users' => User::all()->count(),
            'coursesAndVideos' => CourseMaterial::all()->count() + Course::all()->count(),
            'instructors' => Instructor::all()->count(),
            'enrolledStudents' => CourseStudent::all()->count(),
        ];

        return view('index', compact('departments', 'randomCourses', 'counts'));
    }

    public function showAboutUsPage() 
    {
        $counts = [
            'users' => User::all()->count(),
            'courses' => Course::all()->count(),
            'videos' => CourseMaterial::whereNull('file')->count(),
            'instructors' => Instructor::all()->count(),
            'enrolledStudents' => CourseStudent::all()->count(),
        ];
        return view('pages.about-us.index', compact('counts'));
    }
}
