<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InstructorRequestController;
use App\Http\Controllers\CourseController;

/* --------------------- START DASHBOARD PAGES --------------------- */

// guest admin login page and login handler
Route::middleware(["guest:admin"])->group(function () {
    Route::get("/adminLogin", [DashboardController::class, 'loginPage'])->name('go-admin-login');
    Route::post('/adminLogin-handler', [DashboardController::class, 'loginHandler'])->name('admin-login-handler');
});

Route::middleware(["auth:admin"])->group(function () {
    // logout handler
    Route::post('/adminLogout-handler', [DashboardController::class, 'logoutHandler'])->name('admin-logout-handler');
    // Dashboard home
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('go-admin-dashboard');

    // Students page
    Route::get('/dashboard/students', [DashboardController::class, 'getAllStudents'])->name('go-dash-students');

    // Student details page
    Route::get('/dashboard/student-details/{student}', [DashboardController::class, 'getSingleStudent'])->name('go-student-details');

    // Add student page
    Route::get('/dashboard/add-student', function () {
        return view('admin-dashboard.students.add-student');
    })->name('go-add-student');

    // Instructors page
    Route::get('/dashboard/instructors', [DashboardController::class, 'indexInstructor'])->name('go-instructors');

    // Add dpeartment page
    Route::get('/dashboard/add-department', function () {
        return view('admin-dashboard.departments.add-department');
    })->name('go-add-department');

    // Courses page
    Route::get('/dashboard/courses', [DashboardController::class, 'indexCourse'])->name('go-dash-course');

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
    Route::get('/dashboard/instructor-requests', [DashboardController::class, 'showInstructorRequestsPage'])->name('go-instructor-requests');
    Route::post('/dashboard/accept-instructor-request/{userID}/{reqID}', [DashboardController::class, 'acceptInstructorRequest'])->name('accept-instructor-request');
    Route::delete('delete/instructor-requests/{id}', [DashboardController::class, 'deleteInstructorRequest'])->name('delete-instructor-request');

    // course routes
    Route::delete('delete-course/{id}', [DashboardController::class, 'deleteCourse'])->name('delete-dash-course');

    /* --------------------- END DASHBOARD FUNCTIONS --------------------- */
});

Route::resource('department', DepartmentController::class);
