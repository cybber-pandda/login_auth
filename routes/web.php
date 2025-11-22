<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Auth routes
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Password pages
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('password.reset');

// Role-based dashboards (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/super-admin', function () {
        return view('dashboard.super_admin');
    })->name('super_admin.dashboard');

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('admin.dashboard');

    Route::get('/dashboard/user', function () {
        return view('dashboard.user');
    })->name('user.dashboard');
});

Route::get('/profile', function(){
    return view('dashboard.profile'); // include folder name
})->name('profile')->middleware('auth');

// General dashboard redirect based on role
Route::middleware(['auth'])->get('/dashboard', function () {
    $user = auth()->user();
    if ($user->role === 'super_admin') return redirect()->route('super_admin.dashboard');
    if ($user->role === 'admin') return redirect()->route('admin.dashboard');
    return redirect()->route('user.dashboard');
})->name('dashboard');


