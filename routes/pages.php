<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;

Route::get('/welcome', function () {
    return view('welcome');
});

// Breeze Pages
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* --------------------- START WEBSITE PAGES --------------------- */

// Home page
Route::get('/', [HomePageController::class, 'index'])->name('go-home');

// Courses page
Route::get('/courses', function() {
    return view('/pages.courses.index');
})->name('go-courses');

// About us page
Route::get('/aboutus', function() {
    return view('/pages.about-us.index');
})->name('go-aboutus');

// Pricing page
Route::get('/pricing', function() {
    return view('/pages.pricing.index');
})->name('go-pricing');

Route::resource('departmnet', DepartmentController::class);

/* ------------------------------------- START USER PROFILE ROUTES ------------------------------------- */
// Show instructor dashboard
Route::get('/instructor-dashabord/{user}', [ProfileController::class, 'showDashboard'])->name('go-dashboard');

// Show user profile
Route::get('/profile/{user}', [ProfileController::class, 'showProfile'])->name('go-profile');

// Show enrolled courses
Route::get('/profile/enrolledCourses/{user}', [ProfileController::class, 'showEnrolledCourses'])->name('go-enrolled-courses');

// Create Course
Route::get('/createcourse', [ProfileController::class, 'showCreateCourse'])->name('go-create-course');

Route::get('/createcourse', [ProfileController::class, 'showCreateCourse'])->name('go-create-course');

// Show instructor's created courses
Route::get('/my-courses', [ProfileController::class, 'showMyCourses'])->name('go-my-courses');
/* ------------------------------------- END USER PROFILE ROUTES ------------------------------------- */

// Buy course function
Route::post('/buyCourse', [UserController::class,'buyCourse'])->name('buy-course');

Route::get('/courseDetials/{course}', [HomePageController::class,'showSingleCourse'])->name('course-details');
// Create course by instructor
Route::post('/createNewCourse', [InstructorController::class, 'createCourse'])->name('create-new-course');

// Show Unlocked Course
Route::get('/course-unlocked/{course}', [CourseController::class, 'showUnlockedCourse'])->name('show-unlocked-course');

// Show edit course preiview
Route::get('/edit-course-preivew/{course}', [CourseController::class, 'showEditCoursePreview'])->name('go-edit-cousre-preview');

// Edit course Preview
Route::post('/course/edit-preview/{course}', [CourseController::class, 'editCoursePreview'])->name('edit-course-preview');

// Add new course contet page
Route::get('/add-course-content/{course}', [CourseController::class, 'showAddCourseContent'])->name('go-add-cousre-content');

// Add new course contet
Route::post('/course/add-content/{course}', [CourseController::class, 'addCourseContent'])->name('add-course-content');

// Add course content to topic page
Route::get('/add-content-to-topic/{course}/{courseTopic}', [CourseController::class, 'showAddContentToTopicPage'])->name('go-add-content-to-topic');

// Add course content to topic
Route::post('/add-content-to-topic/{course}/{courseTopic}', [CourseController::class, 'addContentToTopic'])->name('add-content-to-topic');

// Payment success page
Route::get('/success', function() {
    return view('pages.success');
})->name('go-success');

Route::get('/failure', function() {
    return view('pages.fail');
})->name('go-failure');


// Course resource
Route::resource('course', CourseController::class);


/* --------------------- END WEBSITE PAGES --------------------- */

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */

