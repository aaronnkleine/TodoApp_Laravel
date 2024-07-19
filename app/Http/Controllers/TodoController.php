<?php

namespace App\Http\Controllers;


use App\Models\Todo;
use Illuminate\Http\Request;


class TodoController extends Controller
{

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
            'priority' => 'required|in:low,medium,high',
            'deadline' => 'nullable|date',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
        ]);

        $todo->update($request->except('tags'));

        if ($request->has('tags')) {
            $todo->tags()->sync($request->tags);
        }

        return redirect()->route('todo.index');
    }
}
