<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Course;

class HomePageController extends Controller
{
    // Show elements in the home page
    public function index() {
        $departments = Department::all();

        $randomCourses = Course::inRandomOrder()->limit(6)->get();

        return view('index', compact('departments', 'randomCourses'));
    }
    
}
