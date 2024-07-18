<?php

namespace App\Livewire;

use App\Models\Tag;
use App\Models\Todo;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class TodoCreate extends Component
{
    public $title;
    public $priority;
    public $description;
    public $notes;
    public $location;
    public $deadline;
    public $selectedTags = [];

    public function render(): Application|View|Factory|\Illuminate\View\View
    {
        return view('livewire.todo-create');
    }

    public function getTags(): Collection
    {
        return Tag::all();
    }

    public function save(): void
    {
        Log::debug("call save");

        $this->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|string',
            'description' => 'nullable|string',
            'notes' => 'nullable|string',
            'location' => 'nullable|string',
            'deadline' => 'nullable|date',
            'selectedTags' => 'array',
        ]);
        Log::debug('validated');

        $todo = Todo::create([
            'title' => $this->title,
            'priority' => $this->priority,
            'description' => $this->description,
            'notes' => $this->notes,
            'location' => $this->location,
            'deadline' => $this->deadline,
        ]);

        Log::debug($this->selectedTags);
        $todo->tags()->sync($this->selectedTags);

        session()->flash('message', 'Todo created successfully.');
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

    public function getSelectedTags(): Collection|array
    {
        return Tag::query()->whereIn('id', $this->selectedTags)->get();
    }
}


