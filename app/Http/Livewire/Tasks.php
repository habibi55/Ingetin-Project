<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Livewire\Component;

class Tasks extends Component
{
    public $searchTerm = '';
    public $tasks;

    // public function index(Request $request)
    // {
    //     $tasks = Task::where('users_id', Auth::user()->id)->orderBy('deadline', 'asc')->get();
    //     return view('livewire.tasks', compact('tasks'));
    // }

    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->tasks = Task::where('users_id', Auth::user()->id)->where('title', $this->searchTerm)->get();
        } else {
            $this->tasks = Task::where('users_id', Auth::user()->id)->where('title', 'like', '%' . $this->searchTerm . '%')->get();
        }
        return view('livewire.tasks');
    }
}
