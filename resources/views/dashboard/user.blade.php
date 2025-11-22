@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<div class="bg-white p-8 rounded-2xl shadow-lg text-center max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold mb-4">Welcome, {{ auth()->user()->first_name }}!</h1>
    <p class="text-gray-700 mb-6">You are logged in as a normal user.</p>
</div>
@endsection
