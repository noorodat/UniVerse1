<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
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

// Paypal
// U can implement the buyCouse in the user controller and call it in the checkout controller
Route::post('/buy-course', [PaymentController::class, 'buyCourse'])->name('buy-course');
Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal_cancel');
// sami //////






