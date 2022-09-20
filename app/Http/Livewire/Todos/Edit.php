<?php

namespace App\Http\Livewire\Todos;
use App\Models\Todo;
use Livewire\Component;

class Edit extends Component
{

    public $todoId;
    public $name,$task,$hrs;


    public function mount(){

        $this->name = $this->todo->name;
        $this->task = $this->todo->task;
        $this->hrs = $this->todo->hrs;

    }

    public function editTodo()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'task'             => ['required'],
            'hrs'           => ['required','string','max:255'],
        ]);

        $this->todo->update([
            'name'=> $this->name,
            'task'=> $this->task,
            'hrs'=> $this->hrs,
        ]);

        return redirect('/dashboard')->with('message', $this->todo->name .' updated successfully');
    }


    public function getTodoProperty(){
        return Todo::find($this->todoId);
    }

    public function render()
    {
        return view('livewire.todos.edit');
    }
}
