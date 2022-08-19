@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center px-4 md:px-24 lg:px-96 pt-20 md:pt-28 mb-20">
    <form class="w-full" action="{{ route('task.update', [$task->id]) }}" method="POST" enctype="multipart/form-data">

      @method('PUT')
      @csrf

      <h1 class="font-semibold text-2xl mb-4">Edit Task</h1>

      <div class="form">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-2" viewBox="0 0 512 512"><title>Clipboard</title><path d="M336 64h32a48 48 0 0148 48v320a48 48 0 01-48 48H144a48 48 0 01-48-48V112a48 48 0 0148-48h32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="176" y="32" width="160" height="64" rx="26.13" ry="26.13" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
          <h1 class="text-lg font-medium text-black">Judul</h1>
        </div>
        <div class="form-isi">
          <input name="title" type="text" autocomplete="title" class="w-full bg-slate-100 rounded-lg p-2" value="{{ $task->title ?? '' }}"  required>
        </div>
      </div>

      <div class="form">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-2" viewBox="0 0 512 512">
            <path
              d="M342.43 238.23l-74.13 89.09a16 16 0 01-24.6 0l-74.13-89.09A16 16 0 01181.86 212h148.28a16 16 0 0112.29 26.23z" />
            <path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none"
              stroke="currentColor" stroke-miterlimit="10" stroke-width="32" />
          </svg>
          <h1 class="text-lg font-medium text-black">Status</h1>
        </div>

        <div class="form-isi justify-start">

        <select id="status" name="status" autocomplete="status" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
            <option>Pilih Status</option>
            <option value="1" {{ $task->status == '1' ? 'selected' : '' }}>Unscheduled</option>
            <option value="2" {{ $task->status == '2' ? 'selected' : '' }}>Not Started</option>
            <option value="3" {{ $task->status == '3' ? 'selected' : '' }}>In Progress</option>
            <option value="4" {{ $task->status == '4' ? 'selected' : '' }}>Completed</option>
        </select>
        </div>
      </div>

      <div class="form">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Kategori</h1>
        </div>
        <div class="form-isi justify-start gap-3">
          <input name="category" type="text" autocomplete="category" class="w-full bg-slate-100 rounded-lg p-2" value="{{ $task->category ?? '' }}" >
        </div>
      </div>

      <div class="form">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deadline</h1>
        </div>
        <div class="form-isi">
          <input class="w-full rounded-lg bg-slate-100 p-2" type="datetime-local" placeholder="Select Date" name="deadline"
            value="{{ $task->deadline }}">
        </div>
      </div>

      <div class="form">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
          </svg>
          <h1 class="text-lg font-medium text-black">Link</h1>
        </div>

        <div class="form-isi">
          <input class="w-full rounded-lg bg-slate-100 p-2" type="text" name="link" id="link" value="{{ $task->link }}">
        </div>
      </div>

      <div class="form">
        <div class="form-title self-start">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Foto</h1>
        </div>

        <div class="form-isi flex-col items-start">
          <img class="max-h-96 object-contain mb-2" src="{{url(Storage::url('photo/'.$task->photo))}}"  alt="">
          <input value="{{ $task->photo }}" placeholder="photo" type="file" name="photo" id="photo" autocomplete="photo"  class="w-full rounded-lg bg-slate-100 p-2" alt="">
        </div>
      </div>

      <div class="form items-start">
        <div class="form-title">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deskripsi</h1>
        </div>
        <div class="form-isi">
          <textarea name="description" id="description" class="w-full rounded-lg bg-slate-100 p-2"  cols="30" rows="5" >{{ $task->description }}</textarea>
        </div>
      </div>

      <div class="flex justify-end gap-3">
        <a type="button" href="{{ route('task.index') }}" class="rounded-md bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Cancel</a>
        <button type="submit" class="text-white rounded-md bg-primer_3 px-4 py-2 font-medium hover:bg-primer_3_hover" >Save Changes</button>
      </div>

  </form>
</div>


@endsection

