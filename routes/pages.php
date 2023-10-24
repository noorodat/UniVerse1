<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;


Route::get('/welcome', function () {
    return view('welcome');
});

// Breeze Pages
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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

// Show user profile
Route::get('/profile/{user}', [ProfileController::class, 'showProfile'])->name('go-profile');

// Buy course function
Route::post('/buyCourse', [UserController::class,'buyCourse'])->name('buy-course');


/* --------------------- END WEBSITE PAGES --------------------- */

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */

