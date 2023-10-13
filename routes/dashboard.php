<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\CourseController;

/* --------------------- START DASHBOARD PAGES --------------------- */

// Dashboard home
Route::get('/dashboard', [DashboardController::class, 'index'])->name('go-dashboard');

// Students page
Route::get('/dashboard/students', [RegisteredUserController::class, 'getAllStudents'])->name('go-dash-students');

// Student details page
Route::get('/dashboard/student-details/{student}', [RegisteredUserController::class, 'getSingleStudent'])->name('go-student-details');

// Add student page
Route::get('/dashboard/add-student', function() {
    return view('admin-dashboard.students.add-student');
})->name('go-add-student');

// Instructors page
Route::get('/dashboard/instructors', [DashboardController::class, 'indexInstructor'])->name('go-instructors');

// Add dpeartment page
Route::get('/dashboard/add-department', function() {
    return view('admin-dashboard.departments.add-department');
})->name('go-add-department');

// Courses page
Route::get('/dashboard/courses', [DashboardController::class, 'indexCourse'])->name('go-dash-course');

// Add course page
Route::get('/dashboard/add-course', [DashboardController::class, 'addDashCoursePage'])->name('go-add-dash-course');




/* --------------------- END DASHBOARD PAGES --------------------- */

/* --------------------- START DASHBOARD FUNCTIONS --------------------- */

// NOTE:: ADD INDEX PAGE TO SHOW THE DASHBOARD HOME PAGE
Route::resource('student', DashboardController::class);

Route::resource('department', DepartmentController::class);

// Update image coming from AJAX
Route::post('/api/update-image', [DashboardController::class, 'removeImage']);

// Make instructor
Route::post('/students/{student}/make-instructor', [DashboardController::class, 'makeInstructor'])->name('makeInstructor');

Route::resource('instructor', InstructorController::class);
Route::resource('department', DepartmentController::class);
Route::resource('course', CourseController::class);

// Add course
Route::post('add-course', [DashboardController::class, 'addCourse'])->name('add-dash-course');
Route::delete('delete-course/{id}', [DashboardController::class, 'deleteCourse'])->name('delete-dash-course');






/* --------------------- END DASHBOARD FUNCTIONS --------------------- */
