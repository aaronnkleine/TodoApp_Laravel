<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Todo $todo)
    {
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('todo.index', compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'location' => 'nullable|string',
            'state' => 'required',
            'notes' => 'nullable|string',
        ]);

        $validated['state'] = $validated['state'] === 'true';

        Todo::create($validated);

        return redirect()->route('todo.index')->with('success', 'Todo created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        return view('todo.show', ['todo' => $todo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        return view('todo.edit', ['todo' => $todo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        $validated = $request->validate([
            'description' => 'string|nullable',
            'title' => 'string',
            'state' => '',
            'location' => 'string|nullable',
            'notes' => 'string|nullable',
        ]);

        $todo->description = $validated['description'];
        $todo->title = $validated['title'];
        $todo->state = array_key_exists('state', $validated) && (bool)$validated['state'] == true;
        $todo->location = $validated['location'];
        $todo->notes = $validated['notes'];

        $todo->save();

        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todo.index')->with('success', 'Todo deleted successfully!');
    }
}
