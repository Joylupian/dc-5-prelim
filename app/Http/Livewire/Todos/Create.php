<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Create extends Component
{
    public $name,$task,$hrs;

    public function addTodo(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'task'             => ['required'],
                'hrs'           => ['required','string','max:255'],
            ]);

            Todo::create([
                'name'        => $this->name,
                'task'             => $this->task,
                'hrs'           => $this->hrs,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }



    public function render()
    {
        return view('livewire.todos.create');
    }
}
