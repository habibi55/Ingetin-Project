<header class="w-full md:w-screen flex flex-wrap justify-between items-center py-4 md:py-0 md:pt-4 px-4 md:px-6 bg-white fixed">
  <div class="flex items-center">
    <a class="flex items-center" href="/task">
    <svg class="h-10 w-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="500" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="500" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><clipPath id="id1"><path d="M 109.035156 32.359375 L 342.859375 32.359375 L 342.859375 266 L 109.035156 266 Z M 109.035156 32.359375 " clip-rule="nonzero"/></clipPath><clipPath id="id2"><path d="M 32.359375 109.035156 L 266 109.035156 L 266 342.859375 L 32.359375 342.859375 Z M 32.359375 109.035156 " clip-rule="nonzero"/></clipPath></defs><g clip-path="url(#id1)"><path fill="#111" d="M 109.496094 32.363281 L 109.496094 93.015625 L 146.953125 93.015625 L 146.953125 69.816406 L 305.402344 69.816406 L 305.402344 228.269531 L 146.953125 228.269531 L 146.953125 163.433594 L 109.496094 163.433594 L 109.496094 265.722656 L 342.855469 265.722656 L 342.855469 32.363281 L 109.496094 32.363281 " fill-opacity="1" fill-rule="nonzero"/></g><g clip-path="url(#id2)"><path fill="#3AAFA9" d="M 228.265625 305.402344 L 69.816406 305.402344 L 69.816406 146.953125 L 228.265625 146.953125 L 228.265625 211.785156 L 265.722656 211.785156 L 265.71875 109.5 L 32.359375 109.5 L 32.359375 342.859375 L 265.722656 342.859375 L 265.722656 282.203125 L 228.265625 282.203125 L 228.265625 305.402344 " fill-opacity="1" fill-rule="nonzero"/></g></svg>
      <h2 class="pl-1 text-xl font-bold">Rapih</h2>
    </a>
  </div>

  
<div class="flex md:hidden gap-3 ">
  {{-- Search Btn in Phone Screen --}}
  <a class="flex flex-row md:hidden bg-primer hover:opacity-80 items-center gap-2 px-3 rounded-md z-50" href="{{ route('search_small') }}">
    <svg class="text-gray-600 h-3 w-3 fill-white stroke-white" xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
      viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
      width="512px" height="512px">
      <path
          d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
    </svg>

    <div class="text-white text-sm">
      Search Task
    </div>
  </a>

  {{-- Hamburger --}}
  <button
    class="text-bold inline-flex p-3 rounded lg:hidden ml-auto hover:text-primer focus:outline focus:outline-2 nav-toggler"
    data-target="#navigation">
    <i class="fa-solid fa-bars"></i>
  </button>
</div>



  <nav class="hidden top-navbar justify-end items-center w-full md:flex lg:flex lg:flex-grow lg:w-auto" id="navigation">
    <div class="w-full gap-2 pt-4 md:pt-2  flex flex-col md:flex-row-reverse items-start lg:inline-flex lg:w-auto lg:items-center
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
          <div class="flex flex-col px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
              href="{{ route('profile.index') }}">
              Profile
            </a>

            @auth
            <form class="w-full mt-2" action="{{ route('logout') }}" method="post">
              @csrf
              @method("DELETE")
              <button class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                Logout
              </button>
            </form>
            @endauth
          </div>
        </div>
      </div>

      <div class="hidden md:flex w-full md:w-fit flex-col ml-0 md:ml-5 items-end">
        @livewire('tasks')
      </div>
      
      
    
      <a href="{{ route('profile.index') }}" class="md:hidden w-full text-center lg:w-auto text-white font-medium bg-primer px-3 py-2 rounded-md hover:bg-primer_2"> 
          Profile
      </a>

      @auth
      <form class="w-full md:w-auto" action="{{ route('logout') }}" method="post">
        @csrf
        @method("DELETE")
        <button class="nav-small ">Logout</button>
      </form>
      @endauth

    </div>
  </nav>

</header>