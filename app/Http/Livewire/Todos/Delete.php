<?php

namespace App\Http\Livewire\Todos;
use App\Models\Todo;
use Livewire\Component;

class Delete extends Component
{

    public $todoId;



    public function getTodoProperty(){
        return Todo::find($this->todoId);
    }

    public function render()
    {
        return view('livewire.todos.delete');
    }
    public function delete() {
        $this->todo->delete();

        return redirect('/dashboard')->with('message', $this->todo->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
