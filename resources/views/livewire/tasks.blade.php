<div class="flex flex-col ml-5 items-end">
    
    <div class="relative  text-gray-600">
        <button class="absolute left-0 top-0 mt-3 ml-3">
            <svg class="text-gray-600 h-4 w-4 fill-current stroke-black" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
            width="512px" height="512px">
            <path
                d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
        <input class="border-2 border-primer w-72 bg-white h-10 pl-9 pr-2 rounded-lg text-sm focus:outline-none"
            type="search" name="search" placeholder="Search Task.." wire:model="searchTerm">

    </div>


        @if($tasks && $tasks->count() > 0)
            <div class="flex flex-col fixed bg-white shadow-md rounded-md mt-12 p-2 w-110 border">

                <div class="font-semibold">My Task</div>

                @foreach($tasks as $task)
                <a href="{{ route('task-detail', $task->id) }}" class="flex flex-row mt-2 bg-white justify-between p-3 rounded-md gap-2 shadow-md hover:bg-slate-100">
                    <div class="flex flex-row items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-3 w-3 mr-1" viewBox="0 0 512 512"><title>Clipboard</title><path d="M336 64h32a48 48 0 0148 48v320a48 48 0 01-48 48H144a48 48 0 01-48-48V112a48 48 0 0148-48h32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/><rect x="176" y="32" width="160" height="64" rx="26.13" ry="26.13" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                        <div class="text-sm">{{$task->title}}</div>
                    </div>

                    <div class="">
                        @if ($task->status == '1')
                            <div class="bg-purple-400 text-sm rounded-sm text-center px-2">
                            Unscheduled
                            </div>
                        @endif
                        
                        @if ($task->status == '2')
                            <div class="bg-red-400 text-sm rounded-sm text-center px-2">
                            Not Started
                            </div>
                        @endif

                        @if ($task->status == '3')
                            <div class="bg-orange-400 text-sm rounded-sm text-center px-2">
                            In Progress
                            </div>
                        @endif

                        @if ($task->status == '4')
                            <div class="bg-green-400 text-sm rounded-sm text-center px-2">
                            Completed
                            </div>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        @else
        {{-- <div>Tidak ada Task yang dicari</div> --}}
        @endif


</div>


