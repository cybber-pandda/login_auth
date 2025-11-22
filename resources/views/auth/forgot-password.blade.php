<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password - iPaint</title>
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

  <!-- Left: Carousel (Desktop/Tablet) -->
  <div class="w-full md:w-1/2 hidden md:flex flex-col items-center justify-center bg-gradient-to-br from-pink-400 via-yellow-300 to-indigo-400 p-4 md:p-6 relative">
      <div class="w-full h-[300px] sm:h-[400px] md:h-[500px] relative overflow-hidden rounded-2xl shadow-lg carousel">
          <img src="{{ asset('images/carousel/picture1.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0 active" alt="Painting 1">
          <img src="{{ asset('images/carousel/picture2.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 2">
          <img src="{{ asset('images/carousel/picture3.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 3">
          <img src="{{ asset('images/carousel/picture4.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 4">
          <img src="{{ asset('images/carousel/picture5.png') }}" class="w-full h-full object-cover rounded-2xl absolute top-0 left-0" alt="Painting 5">
      </div>

      <!-- Dots -->
      <div class="flex justify-center mt-4 space-x-2 carousel-dots">
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
          <button class="bg-white opacity-50 rounded-full"></button>
      </div>

      <h2 class="text-white text-2xl sm:text-3xl font-bold mt-6 text-center">Forgot Your Password?</h2>
      <p class="text-white text-center mt-2 text-sm sm:text-base"> Don't worry! Just enter the email you used to register, and iPaint will send you a link to reset your password.
</p></p>
  </div>

  <!-- Right: Forgot Password Form -->
  <div class="w-full md:w-1/2 p-6 sm:p-8 md:p-10 flex flex-col justify-center">
      <form action="#" method="POST" class="space-y-6 mx-auto w-full max-w-md">
          @csrf
          
          <div class="flex justify-center mb-4">
              <img src="{{ asset('images/carousel/logo.png') }}" alt="iPaint Logo" class="w-20 h-20 sm:w-24 sm:h-24 object-contain">
          </div>

          <!-- Instruction text -->
          <p class="text-center text-gray-600 mb-4">Please enter your registered email address to receive a password reset link.</p>

          <!-- Email -->
          <div class="relative floating-label">
              <input type="email" name="email" id="email" placeholder=" " required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-400 focus:border-pink-400 transition duration-300">
              <label for="email">Email</label>
          </div>

          <!-- Submit Button -->
          <button type="submit" class="w-full bg-gradient-to-r from-pink-400 via-yellow-300 to-indigo-400 hover:from-pink-500 hover:via-yellow-400 hover:to-indigo-500 text-white font-semibold py-3 rounded-lg transition duration-500">Send Reset Link</button>

          <!-- Back to login -->
          <p class="text-center mt-6 text-gray-700">
              Remember your password?
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
</script>

</body>
</html>
