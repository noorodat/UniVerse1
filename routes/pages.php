<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InstructorRequestController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;

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

// About us page
Route::get('/about-us', [HomePageController::class, 'showAboutUsPage'])->name('go-aboutus');

// Pricing page
Route::get('/pricing', function() {
    return view('/pages.pricing.index');
})->name('go-pricing');

Route::resource('departmnet', DepartmentController::class);
Route::get('/courses', [CourseController::class, 'index'])->name('go-courses');

/* ------------------------------------- START USER PROFILE ROUTES ------------------------------------- */
// Show instructor dashboard
Route::get('/instructor-dashabord/{user}', [ProfileController::class, 'showDashboard'])->name('go-dashboard');

// Show user profile
Route::get('/profile/{user}', [ProfileController::class, 'showProfile'])->name('go-profile');

// Show enrolled courses
Route::get('/profile/enrolledCourses/{user}', [ProfileController::class, 'showEnrolledCourses'])->name('go-enrolled-courses');

// Create Course
Route::get('/createcourse', [ProfileController::class, 'showCreateCourse'])->name('go-create-course');


// Show instructor's created courses
Route::get('/my-courses', [ProfileController::class, 'showMyCourses'])->name('go-my-courses');

// Show sttings
Route::get('/settings', [ProfileController::class, 'showSettings'])->name('go-profile-settings');

// Instructor Request Resource
Route::resource('instructor-request', InstructorRequestController::class);

/* ------------------------------------- END USER PROFILE ROUTES ------------------------------------- */

// Buy course function
Route::post('/buyCourse', [PaymentController::class,'buyCourse'])->name('buy-course')->middleware('auth', 'verified');

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

// Delete course content
Route::post('/delete-course-content/{id}', [CourseController::class, 'deleteCourseContent'])->name('delete-course-content');

// Delete course topic page
Route::get('delete-course-topic/{course}/{topicTitle}', [CourseController::class, 'deleteCourseTopicPage'])->name('go-delete-topic');

// Delete course topic with it's content
Route::post('delete-course-topic/{course}/{topicTitle}', [CourseController::class, 'deleteCourseTopic'])->name('delete-topic');

// Show delete coruse confirmation
Route::get('/delete-course/{id}', [CourseController::class, 'showCourseDeletionPage'])->name('go-delete-course');

// Delete course
Route::post('delete-coruse/{id}', [CourseController::class, 'deleteCourse'])->name('delete-course');


// File routes
Route::get('/courses/sort', [CourseController::class, 'filterCourses'])->name('filer-courses');

// Payment success page
Route::get('/success', function() {
    return view('pages.success');
})->name('go-success');

Route::get('/failure', function() {
    return view('pages.fail');
})->name('go-failure');


// Course resource
Route::resource('course', CourseController::class);

// Contact us page
Route::get('/contact-us', function() {
    return view('pages.contact-us.contact-us');
})->name('go-contact-us');

// Send contact us mail
Route::post('/contact-us', [MailController::class, 'contactUs'])->name('send-contact-us-mail');


/* --------------------- END WEBSITE PAGES --------------------- */

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */

