@extends('layouts.app')

@section('content')

<main class="flex justify-center md:px-24 lg:px-96 pt-28 p-4">

    <div class="w-full items-center flex flex-col">
  
      <h1 class="text-3xl font-bold self-start">My Profile</h1>
      <!-- Edit Photo -->
      {{-- <input type="file" accept="image/*" id="choose" name="photo" hidden required>
      <label for="choose"
        class="text-primer_3 border border-primer_3 hover:bg-primer_3 hover:text-white text-sm px-4 py-2 mt-6 rounded-lg cursor-pointer">
        Edit Photo
      </label> --}}

      <div class="w-full flex flex-col mt-4">
        <label class="text-lg" for="name">Full Name</label>
        <div class="bg-slate-100 rounded-lg py-3 px-4 text-base mt-2" > {{ $profile->name }} </div>
      </div>

      <div class="w-full flex flex-col mt-4">
        <label class="text-lg" for="email">Email</label>
        <div class="bg-slate-100 rounded-lg py-3 px-4 text-base mt-2"> {{ $profile->email }} </div>
      </div>

      <div class="w-full flex flex-row justify-end gap-4 mt-4">
        <a href="{{ route('profile.edit', $profile->id) }}" class="flex-none text-white bg-primer_3 hover:bg-primer_3_hover rounded-md px-4 py-2">Edit Profile</a>
      </div>
    </div>
  

</main>


@endsection