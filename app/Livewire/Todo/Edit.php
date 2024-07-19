<?php

namespace App\Livewire\Todo;

use App\Models\Tag;
use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Edit extends Component
{
    public $todo_id;
    public $title;
    public $priority;
    public $description;
    public $notes;
    public $location;
    public $deadline;
    public $selectedTags = [];
    public $tags;

    public function mount($todoId)
    {
        $this->todo_id = $todoId;
        $todo = Todo::find($todoId)->first();
        $this->title = $todo->title;
        $this->priority = $todo->priority;
        $this->description = $todo->description;
        $this->notes = $todo->notes;
        $this->location = $todo->location;
        $this->deadline = $todo->deadline ? Carbon::parse($todo->deadline)->format('Y-m-d') : null;
        $this->selectedTags = $todo->tags->pluck('id')->toArray();
    }

    public function render(): Application|View|Factory|\Illuminate\View\View
    {
        return view('livewire.todo.edit')->layout('layouts.app');
    }

    public function getTags(): Collection
    {
        return Tag::all();
    }


    public function save(): void
    {
        $this->validate([
            'description' => 'string|nullable',
            'title' => 'string',
            'location' => 'string|nullable',
            'notes' => 'string|nullable',
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'nullable|date',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $this->todo->update([
            'title' => $this->title,
            'priority' => $this->priority ?? 'low',
            'description' => $this->description ?? '',
            'notes' => $this->notes ?? '',
            'location' => $this->location ?? '',
            'deadline' => $this->deadline,
        ]);


        $this->todo->tags()->sync($this->selectedTags);

        $this->redirect(route('todo.index'));
    }

    #[Computed]
    public function todo(): Todo|\Closure|null
    {
        return Todo::find($this->todo_id)->first();
    }


    public function getSelectedTags(): Collection|array
    {
        return Tag::query()->whereIn('id', $this->selectedTags)->get();
    }

    public function addTag($tagId): void
    {
        $this->selectedTags[] = $tagId;
    }

    public function removeTag($tagId): void
    {
        if (($key = array_search($tagId, $this->selectedTags)) !== false) {
            unset($this->selectedTags[$key]);
        }
    }

    protected $listeners = ['changeDate' => 'changeDate'];
}
