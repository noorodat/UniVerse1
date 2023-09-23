<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
Route::get('/', function() {
    return view('/index');
})->name('go-home');

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

/* --------------------- END WEBSITE PAGES --------------------- */

/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */

/* --------------------- START DASHBOARD PAGES --------------------- */

//  Dashboard home apge
Route::get('/dashboard', function() {
    return view('admin-dashboard.index');
})->name('go-dashboard');

/* --------------------- END DASHBOARD PAGES --------------------- */