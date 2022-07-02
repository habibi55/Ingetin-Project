@extends('layouts.home')

@section('content')
<!-- START:HEADER -->
<header class="w-full flex flex-wrap justify-between p-4 px-2 md:px-6 bg-white fixed">
  <div class="flex items-center">
    <a class="flex items-center" href="/task">
      <svg class="max-h-10 fill-cyan-700" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" zoomAndPan="magnify" viewBox="0 0 375 374.999991"
        height="100%" preserveAspectRatio="xMidYMid meet" version="1.0">
        <defs>
          <clipPath id="id1">
            <path
              d="M 109.035156 32.359375 L 342.859375 32.359375 L 342.859375 266 L 109.035156 266 Z M 109.035156 32.359375 "
              clip-rule="nonzero" />
          </clipPath>
          <clipPath id="id2">
            <path
              d="M 32.359375 109.035156 L 266 109.035156 L 266 342.859375 L 32.359375 342.859375 Z M 32.359375 109.035156 "
              clip-rule="nonzero" />
          </clipPath>
        </defs>
        <g clip-path="url(#id1)">
          <path
            d="M 109.496094 32.363281 L 109.496094 93.015625 L 146.953125 93.015625 L 146.953125 69.816406 L 305.402344 69.816406 L 305.402344 228.269531 L 146.953125 228.269531 L 146.953125 163.433594 L 109.496094 163.433594 L 109.496094 265.722656 L 342.855469 265.722656 L 342.855469 32.363281 L 109.496094 32.363281 "
            fill-opacity="1" fill-rule="nonzero" />
        </g>
        <g clip-path="url(#id2)">
          <path
            d="M 228.265625 305.402344 L 69.816406 305.402344 L 69.816406 146.953125 L 228.265625 146.953125 L 228.265625 211.785156 L 265.722656 211.785156 L 265.71875 109.5 L 32.359375 109.5 L 32.359375 342.859375 L 265.722656 342.859375 L 265.722656 282.203125 L 228.265625 282.203125 L 228.265625 305.402344 "
            fill-opacity="1" fill-rule="nonzero" />
        </g>
      </svg>
      <h2 class="pl-1 text-xl font-bold">Ingetin</h2>
    </a>
  </div>

  <!-- Navigation -->
  <button
    class="text-bold flex sm:flex p-3 rounded md:hidden lg:hidden ml-auto hover:text-primer_3 focus:outline focus:outline-2 nav-toggler"
    data-target="#navigation">
    <i class="fa-solid fa-bars"></i>
  </button>

  <nav class="hidden top-navbar w-full md:flex lg:flex lg:flex-grow lg:w-auto pt-0 lg:pt-0" id="navigation">
    <div class="w-full flex flex-col items-start lg:inline-flex lg:flex-row lg:ml-auto lg:w-auto lg:items-center
      lg:h-auto space-y-4 lg:space-y-0 lg:space-x-6">

      <svg xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>

      <div @click.away="open = false" class="hidden lg:block relative" x-data="{ open: false }">
        <button @click="open = !open"
          class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          Halo, {{ Auth::user()->name}}
          <img class="inline ml-3 h-12 w-12 rounded-full" src="img/mini-profile.png" alt="">
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
            class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
            <path fill-rule="evenodd"
              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100"
          x-transition:enter-start="transform opacity-0 scale-95"
          x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
          x-transition:leave-start="transform opacity-100 scale-100"
          x-transition:leave-end="transform opacity-0 scale-95"
          class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
              href="/profile">
              Profile
            </a>

            @auth
            <form action="/logout" method="post">
              @csrf
              @method("DELETE")
              <button class="inline-flex px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                Logout
              </button>
            </form>
            @endauth

          </div>
        </div>
      </div>

      <a class="nav-small" href="">Notification</a>
      <a class="nav-small" href="/profile">Profile</a>
      
      @auth
      <form action="/logout" method="post">
        @csrf
        @method("DELETE")
        <button class="nav-small">Logout</button>
      </form>
      @endauth

    </div>
  </nav>

</header>
<!-- END:HEADER -->

<!-- START:Pembagian Task (FLEX)-->
<main class="bg-white flex gap-4 pb-14 px-6 pt-24 justify-between">

  <!-- START:Unscheduled -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-blue-400 p-1">
    </div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Unscheduled</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">
        <svg class="h-6 w-6 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
    </div>

    <!-- START:Card Task -->

    <!-- END:Card Task -->

  </div>
  <!-- END:Unscheduled -->

  <!-- START:Not Started -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-red-400  p-1">
    </div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Not Started</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">
        <svg class="h-6 w-6 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
    </div>

    <!-- START:Card Task -->
    

    <!-- END:Card Task -->

  </div>
  <!-- END:Not Started -->

  <!-- START:In Progress -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-orange-400  p-1">
    </div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">In Progress</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">
        <svg class="h-6 w-6 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
    </div>

    <!-- START:Card Task -->
  
    <!-- END:Card Task -->
  </div>
  <!-- END:In Progress -->

  <!-- START:Complete -->
  <div class="section-task">

    <!-- Garis Ijo -->
    <div class="flex items-center rounded-t-lg bg-green-400  p-1">
    </div>

    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Completed</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">
        <svg class="h-6 w-6 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <line x1="12" y1="5" x2="12" y2="19" />
          <line x1="5" y1="12" x2="19" y2="12" /></svg>
      </button>
    </div>

    <!-- START:Card Task -->

    <!-- END:Card Task -->

  </div>
  <!-- END:Complete -->

</main>
<!-- END:Pembagian Task -->



<!-- POP UP FORM -->
{{-- <div class="flex relative justify-center items-center">

  <form action="" method="post">
    <div
      class="fixed rounded-md bg-white w-3/5 h-4/5 p-6 modal ease-in-out duration-200 z-10 overflow-y-scroll overflow-x-hidden"
      id="modal">
      <h1 class="font-semibold text-2xl mb-4">Membuat Visualisasi dengan memberikan </h1>

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
          <div class="bg-yellow-300 text-base rounded-sm text-center px-2">
            In Progress
          </div>
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
          <div id="kategori" class="px-2 bg-purple-300 rounded-sm text-center">
            Individu
          </div>
          <div id="kategori" class="px-2 bg-blue-300 rounded-sm text-center">
            Kuliah
          </div>
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
          <input class="w-full rounded-lg bg-slate-100 p-2" type="datetime-local" placeholder="Select Date" name=""
            id="">
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
          <input class="w-full rounded-lg bg-slate-100 p-2" type="url" name="" id="">
        </div>
      </div>

      <div class="form">
        <div class="w-4/12 flex flex-row items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon-popup" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
          </svg>
          <h1 class="text-lg font-medium text-black">Foto</h1>
        </div>
        <div class="w-8/12 flex">
          <input class="w-full rounded-lg bg-slate-100 p-2" type="file" src="storage/" alt="">
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
          <textarea class="w-full rounded-lg bg-slate-100 p-2" name="deskripsi" cols="30" rows="5"></textarea>
        </div>
      </div>

      <div class="flex justify-end gap-3">
        <button class="rounded-xl bg-red-400 px-4 py-2 font-medium hover:bg-red-500">Delete</button>
        <button class="rounded-xl bg-yellow-400 px-4 py-2 font-medium hover:bg-yellow-500">Edit</button>
        <button class="rounded-xl bg-green-400 px-4 py-2 font-medium hover:bg-green-500" type="submit">Save
          Changes</button>
      </div>

 
    </div>
  </form>
</div>

<div id="overlay"></div> --}}
<!-- POP UP -->


@endsection