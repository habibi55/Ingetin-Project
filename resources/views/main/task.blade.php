@extends('layouts.app')

@section('content')

<div class="flex pt-20 justify-start mx-6">
  <a href="{{ route('task.create') }}" class="flex flex-row hover:opacity-80 items-center">
    <div class="text-white text-sm font-semibold bg-primer_3 rounded-md px-4 py-2">
      Create Task
    </div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 stroke-white fill-primer_3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
    </svg>
  </a>
</div>

<!-- Pembagian Task (FLEX)-->
<main class="bg-white flex gap-4 pb-14 px-6 pt-3 justify-between">
  
  <!-- Unscheduled -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-purple-400 p-1"></div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Unscheduled</h1>   
    </div>

    <!-- Card Task -->
    <div class="flex flex-col flex-nowrap px-3 pb-3 gap-3">

      @forelse ($tasks as $key => $task)
        @if ($task->status == '1')
        <a href="{{ route('task-detail', $task->id) }}" class="flex flex-col items-start rounded-lg bg-white shadow-md cursor-pointer">
          <div class="w-full flex flex-col items-start px-3 py-2">
            <h1 class="font-semibold text-base mb-1">{{ $task->title ?? '' }} </h1>
            {{-- <!-- Label -->
            <div class="flex flex-row items-center flex-wrap gap-2 py-1">
              <div id="kategori" class="text-xs px-2 bg-purple-300 rounded-sm text-center">
                Individu
              </div>
              <div id="kategori" class="text-xs px-2 bg-blue-300 rounded-sm text-center">
                Kuliah
              </div>
              <div id="kategori" class="text-xs px-2 bg-orange-300 rounded-sm text-center">
                Bisnis
              </div>
            </div>

            <!-- Tanggal -->
            <div class="flex flex-row justify-center items-center mt-2">
              <div class="flex flex-row items-center">
                <svg class="h-4 w-4 stroke-black" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 83.001 83.001"
                  style="enable-background:new 0 0 83.001 83.001;" xml:space="preserve">
                  <g>
                    <path d="M41.5,0C18.617,0,0.001,18.617,0.001,41.5c0,22.884,18.616,41.501,41.499,41.501C64.383,83.001,83,64.384,83,41.5
                                  C83,18.617,64.382,0,41.5,0z M41.5,77.001C21.926,77.001,6,61.075,6,41.5S21.925,6,41.5,6C61.075,6,77,21.925,77,41.5
                                  S61.075,77.001,41.5,77.001z" />
                                                  <path d="M53.508,45.32c-0.016,0-0.03,0-0.046,0L44.5,45.454V22c0-1.657-1.343-3-3-3s-3,1.343-3,3v26.5
                                  c0,0.006,0.002,0.012,0.002,0.018c0,0.01-0.002,0.019-0.002,0.027c0.002,0.122,0.025,0.237,0.041,0.354
                                  c0.01,0.073,0.011,0.148,0.025,0.22c0.027,0.129,0.072,0.249,0.115,0.37c0.022,0.063,0.036,0.129,0.062,0.189
                                  c0.052,0.123,0.122,0.235,0.189,0.35c0.031,0.051,0.054,0.107,0.087,0.157c0.076,0.111,0.167,0.21,0.257,0.311
                                  c0.038,0.042,0.069,0.09,0.109,0.131c0.097,0.096,0.206,0.177,0.315,0.26c0.044,0.033,0.083,0.073,0.128,0.104
                                  c0.118,0.08,0.247,0.143,0.376,0.205c0.045,0.021,0.085,0.051,0.131,0.07c0.15,0.063,0.31,0.107,0.472,0.146
                                  c0.03,0.007,0.058,0.021,0.089,0.027c0.194,0.039,0.395,0.061,0.601,0.061c0.015,0,0.031,0,0.046,0l12.008-0.18
                                  c1.656-0.025,2.979-1.389,2.955-3.045C56.483,46.634,55.144,45.32,53.508,45.32z" />
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
                <p class="text-sm ml-2">April 1,2022</p>
              </div>
            </div>

            <!-- Icon -->
            <div class="flex flex-row mt-2 mb-1 gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </div> --}}

           <!-- Icon -->
            @if ($task->description !== NULL)
            <div class="flex flex-row mt-2 mb-1 gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </div>
            @else
              
            @endif

        
          </div>      
        </a>
        @else
            
        @endif
        
      @empty 
        {{--empty--}}
      @endforelse
        

     

      </div>

  
  </div>
  
  <!-- Not Started -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-red-400  p-1">
    </div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Not Started</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">     </button>
    </div>

    <!-- START:Card Task -->
    <div class="flex flex-col flex-nowrap px-3 pb-3 gap-3">

      @forelse ($tasks as $key => $task)
        @if ($task->status == '2')
        <a href="{{ route('task-detail', $task->id) }}" class="flex flex-col items-start rounded-lg bg-white shadow-md cursor-pointer">
          <div class="flex flex-col items-start px-3 py-2">
            <h1 class="font-semibold text-base mb-1 text-left">{{ $task->title ?? '' }} </h1>
            {{-- <!-- Label -->
            <div class="flex flex-row items-center flex-wrap gap-2 py-1">
              <div id="kategori" class="text-xs px-2 bg-purple-300 rounded-sm text-center">
                Individu
              </div>
              <div id="kategori" class="text-xs px-2 bg-blue-300 rounded-sm text-center">
                Kuliah
              </div>
              <div id="kategori" class="text-xs px-2 bg-orange-300 rounded-sm text-center">
                Bisnis
              </div>
            </div>

            <!-- Tanggal -->
            <div class="flex flex-row justify-center items-center mt-2">
              <div class="flex flex-row items-center">
                <svg class="h-4 w-4 stroke-black" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 83.001 83.001"
                  style="enable-background:new 0 0 83.001 83.001;" xml:space="preserve">
                  <g>
                    <path d="M41.5,0C18.617,0,0.001,18.617,0.001,41.5c0,22.884,18.616,41.501,41.499,41.501C64.383,83.001,83,64.384,83,41.5
                                  C83,18.617,64.382,0,41.5,0z M41.5,77.001C21.926,77.001,6,61.075,6,41.5S21.925,6,41.5,6C61.075,6,77,21.925,77,41.5
                                  S61.075,77.001,41.5,77.001z" />
                                                  <path d="M53.508,45.32c-0.016,0-0.03,0-0.046,0L44.5,45.454V22c0-1.657-1.343-3-3-3s-3,1.343-3,3v26.5
                                  c0,0.006,0.002,0.012,0.002,0.018c0,0.01-0.002,0.019-0.002,0.027c0.002,0.122,0.025,0.237,0.041,0.354
                                  c0.01,0.073,0.011,0.148,0.025,0.22c0.027,0.129,0.072,0.249,0.115,0.37c0.022,0.063,0.036,0.129,0.062,0.189
                                  c0.052,0.123,0.122,0.235,0.189,0.35c0.031,0.051,0.054,0.107,0.087,0.157c0.076,0.111,0.167,0.21,0.257,0.311
                                  c0.038,0.042,0.069,0.09,0.109,0.131c0.097,0.096,0.206,0.177,0.315,0.26c0.044,0.033,0.083,0.073,0.128,0.104
                                  c0.118,0.08,0.247,0.143,0.376,0.205c0.045,0.021,0.085,0.051,0.131,0.07c0.15,0.063,0.31,0.107,0.472,0.146
                                  c0.03,0.007,0.058,0.021,0.089,0.027c0.194,0.039,0.395,0.061,0.601,0.061c0.015,0,0.031,0,0.046,0l12.008-0.18
                                  c1.656-0.025,2.979-1.389,2.955-3.045C56.483,46.634,55.144,45.32,53.508,45.32z" />
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
                <p class="text-sm ml-2">April 1,2022</p>
              </div>
            </div>

            <!-- Icon -->
            <div class="flex flex-row mt-2 mb-1 gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
              </svg>

              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </div> --}}

          </div>      
        </a>
        @else
            
        @endif
        
      @empty 
        {{--empty--}}
      @endforelse
           

      </div>

    <!-- END:Card Task -->

  </div>
  
  <!-- In Progress -->
  <div class="section-task">
    <div class="flex items-center rounded-t-lg bg-orange-400 p-1">
    </div>
    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">In Progress</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">     </button>
    </div>

    <!-- START:Card Task -->
    <div class="flex flex-col flex-nowrap px-3 pb-3 gap-3">

      @forelse ($tasks as $key => $task)
        @if ($task->status == '3')
        <a href="{{ route('task-detail', $task->id) }}" class="flex flex-col items-start rounded-lg bg-white shadow-md cursor-pointer">
          <div class="flex flex-col items-start px-3 py-2">
            <h1 class="font-semibold text-base mb-1 text-left">{{ $task->title ?? '' }} </h1>


          </div>      
        </a>
        @else
            
        @endif
        
      @empty 
        {{--empty--}}
      @endforelse
        

     

      </div>
  
    <!-- END:Card Task -->
  </div>

  <!-- COMPLETED -->
  <div class="section-task">

    <!-- Garis Ijo -->
    <div class="flex items-center rounded-t-lg bg-green-400  p-1">
    </div>

    <div class="flex justify-between items-center px-4 py-1">
      <h1 class="font-semibold my-2">Completed</h1>
      <button class="-mr-1 p-1 hover:bg-neutral-200 rounded transition duration-300">     </button>
    </div>

   <!-- START:Card Task -->
    <div class="flex flex-col flex-nowrap px-3 pb-3 gap-3">
      @forelse ($tasks as $key => $task)
        @if ($task->status == '4')
        <a href="{{ route('task-detail', $task->id) }}" class="flex flex-col items-start rounded-lg bg-white shadow-md cursor-pointer">
          <div class="flex flex-col items-start px-3 py-2">
            <h1 class="font-semibold text-base mb-1 text-left">{{ $task->title ?? '' }} </h1>

          </div>      
        </a>
        @else
            
        @endif
        
      @empty 
        {{--empty--}}
      @endforelse
        

     

    </div>
  
    <!-- END:Card Task -->

  </div>

</main>


@endsection