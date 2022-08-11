<header class="w-full flex flex-wrap justify-between items-center pt-6 px-2 md:px-6 bg-white fixed">
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

  <button
    class="text-bold flex sm:flex p-3 rounded md:hidden lg:hidden ml-auto hover:text-primer_3 focus:outline focus:outline-2 nav-toggler"
    data-target="#navigation">
    <i class="fa-solid fa-bars"></i>
  </button>

  <nav class="hidden top-navbar justify-end items-center w-full md:flex lg:flex lg:flex-grow lg:w-auto" id="navigation">
    @livewire('tasks')

    <div class="w-full flex flex-col items-start lg:inline-flex lg:w-auto lg:items-center
      lg:h-auto ">

      <svg xmlns="http://www.w3.org/2000/svg" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
      </svg>
        

      <div @click.away="open = false" class="hidden lg:block relative" x-data="{ open: false }">
        <button @click="open = !open"
          class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          Halo, {{ Auth::user()->name; }}
          {{-- <img class="inline ml-3 h-12 w-12 rounded-full" src="img/mini-profile.png" alt=""> --}}
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
              href="{{ route('profile.index') }}">
              Profile
            </a>

            @auth
            <form action="{{ route('logout') }}" method="post">
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

      <!-- Navigation in Small -->
      {{-- <a class="nav-small" href="">Notification</a> --}}
      <a class="nav-small" href="{{ route('profile.index') }}">Profile</a>
      @auth
      <form action="{{ route('logout') }}" method="post">
        @csrf
        @method("DELETE")
        <button class="nav-small">Logout</button>
      </form>
      @endauth

    </div>
  </nav>

</header>