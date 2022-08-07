@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center md:px-24 lg:px-96 pt-28 mb-20">
      <h1 class="font-semibold text-2xl mb-4">Detail Task</h1>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-2" viewBox="0 0 512 512"><title>Clipboard</title><path d="M336 64h32a48 48 0 0148 48v320a48 48 0 01-48 48H144a48 48 0 01-48-48V112a48 48 0 0148-48h32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="176" y="32" width="160" height="64" rx="26.13" ry="26.13" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
          <h1 class="text-lg font-medium text-black">Judul</h1>
        </div>
        <div class="flex w-8/12">
          <div class="w-full bg-slate-100 rounded-lg p-2"> {{ $tasks->title }} </div>
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
          @if ($tasks->status == '1')
            <div class="bg-purple-400 text-base rounded-sm text-center px-2">
              Unscheduled
            </div>
          @endif
          
          @if ($tasks->status == '2')
            <div class="bg-red-400 text-base rounded-sm text-center px-2">
              Not Started
            </div>
          @endif

          @if ($tasks->status == '3')
            <div class="bg-orange-400 text-base rounded-sm text-center px-2">
              In Progress
            </div>
          @endif

          @if ($tasks->status == '4')
            <div class="bg-green-400 text-base rounded-sm text-center px-2">
              Completed
            </div>
          @endif
        </div>
      </div>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Kategori</h1>
        </div>
        <div class="flex w-8/12 justify-start gap-3">
          
          @if ($tasks->category == NULL)
        
              <div class="w-full bg-slate-100 rounded-lg p-2">ㅤ</div>
          @else
            <div class="w-full bg-slate-100 rounded-lg p-2"> {{ $tasks->category }} </div>
          @endif
          
        </div>
      </div>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deadline</h1>
        </div>
        <div class="w-8/12 flex">
          @if ($tasks->deadline == NULL)
              <div class="w-full rounded-lg bg-slate-100 p-2"  cols="30" rows="5" >ㅤ</div>
          @else
              <div class="w-full rounded-lg bg-slate-100 p-3"  cols="30" rows="5" >{{  date("F j, Y H:i",strtotime($tasks->deadline)) ?? '' }} </div>
          @endif
        </div>
      </div>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
          </svg>
          <h1 class="text-lg font-medium text-black">Link</h1>
        </div>

        <div class="w-8/12 flex">
          @if ($tasks->link == NULL)
              <div class="w-full rounded-lg bg-slate-100 p-2"  cols="30" rows="5" >ㅤ</div>
          @else
              <a href="{{ url( $tasks->link )}}" target="_blank" class="w-full rounded-lg bg-slate-100 p-3"  cols="30" rows="5" >{{ $tasks->link }}</a>
          @endif

        </div>
      </div>    

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
          <img class="max-h-96 object-contain mb-2" src="{{url(Storage::url('photo/'.$tasks->photo))}}"  alt="">
        </div>
      </div>

      <div class="form items-start">
        <div class="w-4/12 flex flex-row items-center self-start">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
          </svg>
          <h1 class="text-lg font-medium text-black">Deskripsi</h1>
        </div>
        <div class="w-8/12 flex">
          @if ($tasks->description == NULL)
              <div class="w-full rounded-lg bg-slate-100 p-2"  cols="30" rows="5" >ㅤ</div>
          @else
              <div class="w-full rounded-lg bg-slate-100 p-3"  cols="30" rows="5" >{!! $tasks->description !!}</div>
          @endif
        </div>
      </div>

      <div class="flex justify-end gap-3">    
    
      <form action="{{ route('task.destroy', $tasks->id) }}" method="POST">
        @csrf {{ method_field('DELETE') }}
        
          <button class="text-white bg-red-500 hover:bg-red-700 rounded-md px-4 py-2" >Delete</button>
      </form>     
        <a href="{{ route('task.edit', $tasks['id']) }}" type="button" class="text-white bg-primer_3 hover:bg-primer_3_hover rounded-md px-4 py-2" >Edit Task</a>
      </div>

</div>


@endsection