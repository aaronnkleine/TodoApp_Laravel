<?php

namespace App\Livewire;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoTable extends Component
{

    public string $sortBy = '';
    public bool $sortDirection = false;


    public function render(): Application|View|Factory|\Illuminate\View\View
    {
        return view('livewire.todo-table');
    }


    public function todos()
    {
        $user = User::find(Auth::id());
        $todos = $user->todos;

        if ($this->sortBy) {
            if ($this->sortBy === 'priority') {
                $priorityOrder = $this->sortDirection ? ['low', 'medium', 'high'] : ['high', 'medium', 'low'];

                $todos = $todos->sort(function ($a, $b) use ($priorityOrder) {
                    return array_search($a->priority, $priorityOrder) - array_search($b->priority, $priorityOrder);
                });
            } else {
                $todos = $todos->sortBy($this->sortBy, SORT_REGULAR, $this->sortDirection);
            }
        }

        return $todos;
    }



    public function setSort($field): void
    {
        $this->sortBy = $field;
        $this->sortDirection = !$this->sortDirection;
    }


    public function changeState($todoId): void
    {
        $todo = Todo::find($todoId);
        $todo->state = !$todo->state;
        $todo->save();
        $this->dispatch('$refresh')->self();
    }
}
