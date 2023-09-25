<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

/* --------------------- START DASHBOARD PAGES --------------------- */

//  Dashboard home apge
Route::get('/dashboard', function() {
    return view('admin-dashboard.index');
})->name('go-dashboard');

Route::get('/dashboard/students', [RegisteredUserController::class, 'getAllStudents'])->name('go-dash-students');
/* --------------------- END DASHBOARD PAGES --------------------- */

