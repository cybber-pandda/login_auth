<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register - iPaint</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-purple-50 via-indigo-100 to-orange-50 overflow-auto py-8">

<!-- Paint splashes -->
<div class="splash bg-pink-400 top-10 left-5 w-36 h-36 sm:w-40 sm:h-40 md:w-40 md:h-40"></div>
<div class="splash bg-yellow-300 top-20 right-5 w-44 h-44 sm:w-48 sm:h-48 md:w-48 md:h-48"></div>
<div class="splash bg-indigo-400 bottom-10 left-10 w-28 h-28 sm:w-32 sm:h-32 md:w-32 md:h-32"></div>
<div class="splash bg-green-300 bottom-5 right-20 w-36 h-36 sm:w-40 sm:h-40 md:w-40 md:h-40"></div>

<!-- Main Card -->
<div class="relative z-10 flex flex-col md:flex-row w-full max-w-6xl bg-white rounded-3xl shadow-2xl overflow-hidden mx-4 sm:mx-8 lg:mx-16">
  
  <!-- Left: Carousel (same as login) -->
  <div class="w-full md:w-1/2 hidden md:flex flex-col items-center justify-center bg-gradient-to-br from-pink-400 via-yellow-300 to-indigo-400 p-4 md:p-6 relative">
      <div class="w-full h-[300px] sm:h-[400px] md:h-[500px] relative overflow-hidden rounded-2xl shadow-lg carousel">
          <img src="{{ asset('images/carousel/picture1.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0 active" alt="Painting 1">
          <img src="{{ asset('images/carousel/picture2.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 2">
          <img src="{{ asset('images/carousel/picture3.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 3">
          <img src="{{ asset('images/carousel/picture4.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 4">
          <img src="{{ asset('images/carousel/picture5.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 5">
      </div>
      <div class="flex justify-center mt-4 space-x-2 carousel-dots">
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
      </div>
      <h2 class="text-white text-2xl sm:text-3xl font-bold mt-6 text-center">Join iPaint</h2>
      <p class="text-white text-center mt-2 text-sm sm:text-base">Sign up to explore beautiful artworks and connect with artists.</p>
  </div>

  <!-- Right: Registration Form -->
  <div class="w-full md:w-1/2 p-6 sm:p-8 md:p-10">
      <form action="#" method="POST" class="space-y-6">
          @csrf

          <!-- First Name & Last Name Row -->
          <div class="flex space-x-4">
              <div class="relative floating-label flex-1">
                  <input type="text" name="first_name" id="first_name" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
                  <label for="first_name">First Name</label>
              </div>
              <div class="relative floating-label flex-1">
                  <input type="text" name="last_name" id="last_name" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
                  <label for="last_name">Last Name</label>
              </div>
          </div>

          <!-- Username -->
          <div class="relative floating-label">
              <input type="text" name="username" id="username" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
              <label for="username">Username</label>
          </div>

        <!-- Email -->
          <div class="relative floating-label">
              <input type="email" name="email" id="email" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
              <label for="email">Email</label>
          </div>

        <!-- Password -->
        <div class="relative floating-label">
            <input type="password" name="password" id="password" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
            <label for="password">Password</label>
            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-700 focus:outline-none toggle-password" data-target="password">
                <svg class="eye-open h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <svg class="eye-closed h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.055 10.055 0 012.658-3.848M6.223 6.223A9.965 9.965 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.96 9.96 0 01-1.666 3.042M3 3l18 18"/>
                </svg>
            </button>
        </div>

        <!-- Confirm Password -->
        <div class="relative floating-label">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
            <label for="password_confirmation">Confirm Password</label>
            <button type="button" class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-700 focus:outline-none toggle-password" data-target="password_confirmation">
                <svg class="eye-open h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                </svg>
                <svg class="eye-closed h-5 w-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.477 0-8.268-2.943-9.542-7a10.055 10.055 0 012.658-3.848M6.223 6.223A9.965 9.965 0 0112 5c4.477 0 8.268 2.943 9.542 7a9.96 9.96 0 01-1.666 3.042M3 3l18 18"/>
                </svg>
            </button>
        </div>

          <!-- Terms & Conditions -->
          <div class="flex items-center space-x-2 text-sm text-gray-600">
              <input type="checkbox" id="terms" name="terms" required class="h-4 w-4 text-pink-400 focus:ring-pink-400 border-gray-300 rounded">
              <label for="terms">I agree to the <a href="#" class="text-pink-500 hover:text-pink-700 font-semibold">Terms & Conditions</a> and <a href="#" class="text-pink-500 hover:text-pink-700 font-semibold">Privacy Policy</a></label>
          </div>

          <!-- Register Button -->
          <button type="submit" class="w-full bg-gradient-to-r from-pink-400 via-yellow-300 to-indigo-400 hover:from-pink-500 hover:via-yellow-400 hover:to-indigo-500 text-white font-semibold py-3 rounded-lg transition duration-500">Register</button>

          <!-- Divider -->
          <div class="flex items-center my-4">
              <hr class="flex-grow border-t border-gray-300">
              <span class="mx-2 text-gray-500 font-semibold">or</span>
              <hr class="flex-grow border-t border-gray-300">
          </div>

          <!-- Login with Google -->
          <a href="#" class="w-full inline-flex justify-center items-center bg-white border border-gray-300 hover:bg-gray-100 text-gray-700 font-semibold py-3 rounded-lg shadow-sm transition duration-300">
              <img src="{{ asset('images/carousel/goole-logo.png') }}" alt="Google" class="w-6 h-6 mr-2"> Register with Google
          </a>

          <!-- Already have an account -->
          <p class="text-center mt-6 text-gray-700">
              Already have an account?
              <a href="{{ route('login') }}" class="text-pink-500 font-semibold hover:text-pink-700 transition duration-300">Login</a>
          </p>

      </form>
  </div>
</div>

<script>
// Carousel logic (same as login)
const slides = document.querySelectorAll('.carousel img');
const dots = document.querySelectorAll('.carousel-dots button');
let current = 0;
function showSlide(index){
    slides.forEach((slide,i)=>{
        slide.classList.remove('active');
        dots[i].classList.remove('active');
        dots[i].classList.add('opacity-50');
        if(i===index){slide.classList.add('active'); dots[i].classList.add('active'); dots[i].classList.remove('opacity-50');}
    });
}
dots.forEach((dot,i)=>{dot.addEventListener('click',()=>{current=i; showSlide(current);});});
setInterval(()=>{current=(current+1)%slides.length; showSlide(current);},3000);
showSlide(current);

// Password toggle for register page
document.querySelectorAll('.toggle-password').forEach(button => {
    button.addEventListener('click', () => {
        const targetId = button.getAttribute('data-target');
        const input = document.getElementById(targetId);
        const eyeOpen = button.querySelector('.eye-open');
        const eyeClosed = button.querySelector('.eye-closed');

        if(input.type === 'password'){
            input.type = 'text';
        } else {
            input.type = 'password';
        }

        eyeOpen.classList.toggle('hidden');
        eyeClosed.classList.toggle('hidden');
    });
});
</script>

</body>
</html>
