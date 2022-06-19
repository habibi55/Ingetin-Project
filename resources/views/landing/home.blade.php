@extends('layouts.home')

@section('content')
    <div class="text-blue-400 pl-3"> Celamat Datang
      <span>  {{ auth()->user()->name }} </span>
     
    </div>

            @auth
        <form action="/logout" method="post">
          @csrf
          @method("DELETE")
          <button class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 hover:bg-red-700">Log out</button>
        </form>
        @endauth

@endsection