<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register'); // make sure your Blade file is in resources/views/auth/register.blade.php
    }

    // Handle registration
    public function register(Request $request)
    {
        // Validate form
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'username'   => 'required|string|max:255|unique:users',
            'email'      => 'required|email|unique:users',
            'password'   => ['required', 'confirmed', Password::min(8)],
            'terms'      => 'accepted'
        ]);

        // Create user
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'username'   => $request->username,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
            'role'       => 'user', // default role
        ]);

        // Auto-login
        Auth::login($user);

        // Redirect to user dashboard
        return redirect()->route('user.dashboard');
    }
}
