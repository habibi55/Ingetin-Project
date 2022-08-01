@extends('layouts.home')

@section('content')

<main class="flex justify-center items-center">

  <!-- START: Left-Content -->
  <div class="w-1/2 hidden lg:inline bg-primer h-screen">
  </div>
  <!-- END: Left-Content -->

  <!-- START: Right-Content -->
  <div class="flex flex-col w-full md:w-1/2 justify-center items-center px-16 md:px-44 h-screen">

    <!-- Header -->
    <h1 class="font-semibold text-center text-2xl md:text-3xl mb-2">Sign up to Ingetin</h1>
    <h2 class="w-full opacity-50 text-center mb-3 text-xs md:text-sm">Join Ingetin and write your task</h2>

    <form class="w-full" action="" method="POST">

      @csrf

      <div class="flex flex-col">

        <div class="flex flex-col mt-4">
          <label class="text-xl" for="name">Full Name</label>
          <input name="name" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2" id="email" type="text"
            placeholder="Your Name" required>
        </div>

        <div class="flex flex-col mt-4">
          <label class="text-xl" for="email">Email</label>
          <input name="email" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2" id="email"
            type="email" placeholder="name@domain.com" required>
        </div>

        <div class="flex flex-col mt-4">
          <label class="text-xl" for="password">Password</label>
          <input name="password" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2" id="password"
            type="password" placeholder="At least 8 characters" required>
        </div>

        <div class="flex flex-col mt-4">
          <label class="text-xl" for="password_confirmation">Confirm Password</label>
          <input name="password_confirmation" class="border border-gray-300 rounded-lg py-3 px-4 text-base mt-2"
            id="password" type="password" placeholder="At least 8 characters" required>
        </div>

        <button type="submit" class="mt-4 font-medium text-white bg-primer hover:bg-primer_2 py-2 border rounded-md w-full">
          Sign Up
        </button>
      </div>

      <div class="w-full text-center mt-4">
        Already have account? <a class="text-primer font-medium" href="{{ route('login') }}">Sign in</a>
      </div>

    </form>




  </div>
  <!-- END: Right-Content -->

</main>

@endsection