@extends('layouts.app')

@section('content')

<div class="flex justify-center md:px-24 lg:px-96 pt-28">
    <form class="w-full" action="{{ route('task.update', [$task->id]) }}" method="POST" enctype="multipart/form-data">

      @method('PUT')
      @csrf

      <h1 class="font-semibold text-2xl mb-4">Edit Task</h1>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-2" viewBox="0 0 512 512">
            <path
              d="M342.43 238.23l-74.13 89.09a16 16 0 01-24.6 0l-74.13-89.09A16 16 0 01181.86 212h148.28a16 16 0 0112.29 26.23z" />
            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
              stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
          </svg>
          <h1 class="text-lg font-medium text-black">Judul</h1>
        </div>
        <div class="flex w-8/12">
          <input name="title" type="text" autocomplete="title" class="w-full bg-slate-100 rounded-lg p-2" value="{{ $task->title ?? '' }}"  required>
        </div>
      </div>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-2" viewBox="0 0 512 512">
            <path
              d="M342.43 238.23l-74.13 89.09a16 16 0 01-24.6 0l-74.13-89.09A16 16 0 01181.86 212h148.28a16 16 0 0112.29 26.23z" />
            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
              stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
          </svg>
          <h1 class="text-lg font-medium text-black">Status</h1>
        </div>

        <div class="flex w-8/12 justify-start">

        <select id="status" name="status" autocomplete="status" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            <option>Pilih Status</option>
            <option value="1" {{ $task->status == '1' ? 'selected' : '' }}>Unscheduled</option>
            <option value="2" {{ $task->status == '2' ? 'selected' : '' }}>Not Started</option>
            <option value="3" {{ $task->status == '3' ? 'selected' : '' }}>In Progress</option>
            <option value="4" {{ $task->status == '4' ? 'selected' : '' }}>Completed</option>
        </select>
        </div>
      </div>

      {{-- <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Kategori</h1>
        </div>
        <div class="flex w-8/12 justify-start gap-3">
          <div id="kategori" class="px-2 bg-purple-300 rounded-sm text-center">
            Individu
          </div>
          <div id="kategori" class="px-2 bg-blue-300 rounded-sm text-center">
            Kuliah
          </div>
        </div>
      </div> --}}

      {{-- <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deadline</h1>
        </div>
        <div class="w-8/12 flex">
          <input class="w-full rounded-lg bg-slate-100 p-2" type="datetime-local" placeholder="Select Date" name=""
            id="">
        </div>
      </div> --}}

      {{-- <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
          </svg>
          <h1 class="text-lg font-medium text-black">Link</h1>
        </div>

        <div class="w-8/12 flex">
          <input class="w-full rounded-lg bg-slate-100 p-2" type="url" name="" id="">
        </div>
      </div> --}}

      <div class="form">
        <div class="w-4/12 flex flex-row items-center self-start">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Foto</h1>
        </div>

        <div class="w-8/12 flex flex-col items-start">
          <img class="max-h-96 object-contain mb-2" src="{{url(Storage::url('photo/'.$task->photo))}}"  alt="">
          <input value="{{ $task->photo }}" placeholder="photo" type="file" name="photo" id="photo" autocomplete="photo"  class="w-full rounded-lg bg-slate-100 p-2" alt="">

          {{-- @if (auth()->task()->first()->photo != NULL)
             <img src="{{ url(Storage::url(auth()->task()->first()->photo)) }}" alt="photo profile" class="w-20 h-20">
          @else
            
          @endif
          <label for="choose" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Choose File</label>

          <input type="file" accept="image/*" id="choose" name="photo" hidden> --}}


        </div>
      </div>

      <div class="form items-start">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deskripsi</h1>
        </div>
        <div class="w-8/12 flex">
          <textarea name="description" id="description" class="w-full rounded-lg bg-slate-100 p-2"  cols="30" rows="5" >{{ $task->description }}</textarea>
        </div>
      </div>

      <div class="flex justify-end gap-3">
        <a type="button" href="{{ route('task.index') }}" class="rounded-xl bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Cancel</a>
        {{-- <button class="rounded-xl bg-yellow-400 px-4 py-2 font-medium hover:bg-yellow-500">Edit</button> --}}
        <button type="submit" class="rounded-xl bg-green-400 px-4 py-2 font-medium hover:bg-green-500" >Save Changes</button>
      </div>

  </form>
</div>


@endsection

