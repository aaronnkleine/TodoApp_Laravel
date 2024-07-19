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

}
