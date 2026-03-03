<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Login and Landing Page
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Process Login Attempt
Route::post('/', [AuthController::class, 'login']);

// Display Registration Page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Process Registration Form
Route::post('/register', function () {
    // Logic for saving users or sending approval requests
    return back(); 
})->name('register.post'); 

// Dashboard Route (Protected by Auth Middleware)
Route::get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Redirect /login to root
Route::get('/login', function() {
    return redirect('/');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');