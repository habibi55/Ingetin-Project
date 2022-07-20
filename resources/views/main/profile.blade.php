@extends('layouts.app')

@section('content')

<main class="flex justify-center md:px-24 lg:px-96 pt-28 p-4">

    <div class="w-full items-center flex flex-col">
      <img class="flex-none max-h-24 max-w-24 rounded-full" src="img/mini-profile.png" alt="">

      <!-- Edit Photo -->
      <input type="file" accept="image/*" id="choose" name="photo" hidden required>
      <label for="choose"
        class="text-primer_3 border border-primer_3 hover:bg-primer_3 hover:text-white text-sm px-4 py-2 mt-6 rounded-lg cursor-pointer">
        Edit Photo
      </label>

      <div class="w-full flex flex-col mt-4">
        <label class="text-lg" for="name">Full Name</label>
        <input name="name" class="bg-slate-100 rounded-lg py-3 px-4 text-base mt-2" id="email" type="text" required>
      </div>

      <div class="w-full flex flex-col mt-4">
        <label class="text-lg" for="email">Email</label>
        <input name="email" class="bg-slate-100 rounded-lg py-3 px-4 text-base mt-2" id="email" type="email" required>
      </div>

      <div class="w-full flex flex-row justify-end gap-4 mt-4">
        <button type="reset"
          class="font-medium text-primer_3 px-4 py-2 border rounded-md border-primer_3 hover:bg-primer_3 hover:text-white">Cancel</button>
        <button type="submit" class="flex-none text-white bg-primer_3 hover:bg-primer_3_hover rounded-md px-4 py-2">Save
          Changes</button>
      </div>
    </div>
  

</main>


@endsection