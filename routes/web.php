<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
require __DIR__.'/pages.php';
require __DIR__.'/dashboard.php';

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Paypal routes
Route::post('/buy-course', [PaymentController::class, 'buyCourse'])->name('buy-course');
Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal_cancel');

// Course routes
Route::post('/edit-course-content/{course}/{topicTitle}/{tmpFileName}', [CourseController::class, 'updateCourseContent'])
    ->name('update-course-content');





