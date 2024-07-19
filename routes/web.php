<?php

use App\Http\Controllers\TodoController;
use App\Livewire\Todo\Create;
use App\Livewire\Todo\Index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;





Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/todo/create', Create::class)->name('todo.create');
    Route::get('/todo/', Index::class)->name('todo.index');
    Route::resource('todo', TodoController::class)->except(['create','store','index','destroy']);
    Route::resource('tags', TagController::class);




    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
