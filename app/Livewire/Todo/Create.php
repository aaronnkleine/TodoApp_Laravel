<?php

namespace App\Livewire\Todo;

use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Create extends Component
{
    public $title;
    public $priority = 'low';
    public $description;
    public $notes;
    public $location;
    public $deadline = null;
    public $selectedTags = [];

    public function render(): Application|View|Factory|\Illuminate\View\View
    {
        return view('livewire.todo.create')->layout('layouts.app');
    }

    public function getTags(): Collection
    {
        return Tag::all();
    }

    public function save(): void
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'priority' => 'required|string',
            'description' => 'nullable|string',
            'notes' => 'nullable|string',
            'location' => 'nullable|string',
            'deadline' => 'nullable|date',
            'selectedTags' => 'array',
        ]);

        $todo = Auth::user()->todos()->create([
        'title' => $this->title,
            'priority' => $this->priority ?? 'low',
            'description' => $this->description ?? '',
            'notes' => $this->notes ?? '',
            'location' => $this->location ?? '',
            'deadline' => $this->deadline ,
        ]);

        $todo->tags()->sync($this->selectedTags);
        $this->redirect(route('todo.index'));

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


