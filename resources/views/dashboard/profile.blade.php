@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">Profile</h1>
    <p class="text-gray-700 mb-2"><strong>First Name:</strong> {{ auth()->user()->first_name }}</p>
    <p class="text-gray-700 mb-2"><strong>Last Name:</strong> {{ auth()->user()->last_name }}</p>
    <p class="text-gray-700 mb-2"><strong>Username:</strong> {{ auth()->user()->username }}</p>
    <p class="text-gray-700 mb-2"><strong>Email:</strong> {{ auth()->user()->email }}</p>
    <p class="text-gray-700 mb-2"><strong>Role:</strong> {{ ucfirst(auth()->user()->role) }}</p>
</div>
@endsection
