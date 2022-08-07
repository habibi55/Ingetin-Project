<?php

namespace App\Http\Livewire;

use App\Models\Task;

use Livewire\Component;

class Tasks extends Component
{
    public $searchTerm = '';
    public $task;
    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->task = Task::where('title', $this->searchTerm)->get();
        } else {
            $this->task = Task::where('title', 'like', '%' . $this->searchTerm . '%')->get();
        }
        return view('livewire.tasks');
    }
}
