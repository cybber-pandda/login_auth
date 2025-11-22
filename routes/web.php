<?php

use Illuminate\Support\Facades\Route;

// Login page (landing page)
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Explicit login page route (optional)
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Register page
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Forgot Password page
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Reset Password page
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');
