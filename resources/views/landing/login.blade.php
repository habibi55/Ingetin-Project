@extends('layouts.home')

@section('content')
  <main class="flex justify-center items-center">

    <!-- START: Left-Content -->
    <div class="w-1/2 hidden lg:inline bg-green-200 h-screen">
    </div>
    <!-- END: Left-Content -->

    <!-- START: Right-Content -->
    <div class="flex flex-col w-full md:w-1/2 justify-center items-center px-16 md:px-44 h-screen">

      <!-- Header -->
      <h1 class="font-semibold text-center text-2xl md:text-3xl mb-2">Log in to Ingetin</h1>
      <h2 class="w-full opacity-50 text-center mb-3 text-xs md:text-sm">Enter your email & password to continue</h2>

      <!-- Body -->

      @if(session('loginError'))
      <div class="w-full bg-white shadow-sm p-4 rounded-md drop-shadow-lg">
          <span class="text-red-500 font-light">{{ session('loginError') }}</span>
      </div>
      @endif

      <form class="w-full" action="/login" method="POST">
        @csrf

        <div class="flex flex-col">

          <div class="flex flex-col mt-4">
            <label class="text-xl" for="email">Email</label>
            <input name="email" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2" id="email"
              type="email" placeholder="name@domain.com" required autofocus>
          </div>

          <div class="flex flex-col mt-4">
            <label class="text-xl" for="password">Password</label>
            <input name="password" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2" id="password"
              type="password" placeholder="At least 8 characters" required autofocus>
          </div>

          <button type="submit" class="mt-4 font-medium text-white bg-green-600 py-2 border rounded-md w-full">
            Log In
          </button>
        </div>

        <p class="text-center py-5">
          Dont have account? <a href="/register" class="text-green-700">Sign up</a>
        </p>

      </form>
    </div>
    <!-- END: Right-Content -->

  </main>
@endsection

