<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - iPaint</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gradient-to-br from-purple-50 via-indigo-100 to-orange-50 min-h-screen">

    <header class="bg-white shadow-md p-4 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/carousel/logo.png') }}" alt="iPaint Logo" class="w-10 h-10 object-contain">
            <h1 class="text-xl font-bold">iPaint</h1>
        </div>
        <nav class="space-x-4">
            <a href="{{ route('user.dashboard') }}" class="text-gray-700 hover:text-pink-500">Dashboard</a>
            <a href="{{ route('profile') }}" class="text-gray-700 hover:text-pink-500">Profile</a>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="text-red-500 hover:text-red-600">Logout</a>
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </header>

    <!-- Main Content -->
    <main class="py-8">
        @yield('content')
    </main>

</body>
</html>
