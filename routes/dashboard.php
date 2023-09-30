<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;

/* --------------------- START DASHBOARD PAGES --------------------- */

//  Dashboard home apge
Route::get('/dashboard', function() {
    return view('admin-dashboard.index');
})->name('go-dashboard');

// Students page
Route::get('/dashboard/students', [RegisteredUserController::class, 'getAllStudents'])->name('go-dash-students');

// Student details page
Route::get('/dashboard/student-details/{student}', [RegisteredUserController::class, 'getSingleStudent'])->name('go-student-details');

// Add student page
Route::get('/dashboard/add-student', function() {
    return view('admin-dashboard.students.add-student');
})->name('go-add-student');


/* --------------------- END DASHBOARD PAGES --------------------- */

/* --------------------- START DASHBOARD FUNCTIONS --------------------- */
// NOTE:: ADD INDEX PAGE TO SHOW THE DASHBOARD HOME PAGE
Route::resource('student', DashboardController::class);
// Update image coming from AJAX
Route::post('/api/update-image', [DashboardController::class, 'removeImage']);


