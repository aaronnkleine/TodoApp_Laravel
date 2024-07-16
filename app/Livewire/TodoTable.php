<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoTable extends Component
{
    public function render(): Application|View|Factory|\Illuminate\View\View
    {
        return view('livewire.todo-table');
    }


    public function todos()
    {
        return Auth::user()->todos;
    }

    public function changeState($todoId): void
    {
        $todo = Todo::find($todoId);
        $todo->state = !$todo->state;
        $todo->save();
        $this->dispatch('$refresh')->self();
    }
}
