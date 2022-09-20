<?php

namespace App\Http\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Index extends Component
{
    public function loadTodo() {
        $todos = Todo::orderBy('name')->get();

        return compact('todos');
    }

    public function render()
    {
        return view('livewire.todos.index', $this->loadTodo());
    }
}
