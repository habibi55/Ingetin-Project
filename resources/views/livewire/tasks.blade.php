<div class="flex flex-col ml-10 items-end">
    <form class="flex flex-row ">
        <input wire:model="searchTerm" type="text" id="search" name="search" class=" px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-primer rounded-full transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-primer focus:outline-none" placeholder="Search" >
        <button class="ml-1 rounded-full btn px-3 py-3 bg-primer shadow-md hover:bg-primer_2 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center" type="button" id="button-addon2">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="#fff" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
            </svg>
        </button>
    </form><br>

    <div class="flex flex-col fixed bg-white rounded-md  p-2 mt-12 w-96">
        @if($task && $task->count() > 0)
            @foreach($task as $task)
            <a href="{{ route('task-detail', $task->id) }}" class="flex flex-row mb-2 bg-white justify-between p-1 rounded-md gap-2 shadow-md">
                <div class="flex flex-row items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 w-5 mr-1" viewBox="0 0 512 512"><title>Clipboard</title><path d="M336 64h32a48 48 0 0148 48v320a48 48 0 01-48 48H144a48 48 0 01-48-48V112a48 48 0 0148-48h32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="176" y="32" width="160" height="64" rx="26.13" ry="26.13" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                    <div class="">{{$task->title}}</div>
                </div>

                <div class="">
                    {{  $task->status }}
                </div>
            </a>
            @endforeach
        @else
        
        @endif

    </div>
</div>
