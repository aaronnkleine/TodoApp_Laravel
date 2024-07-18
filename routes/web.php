<?php

use App\Http\Controllers\TodoController;
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


    Route::resource('todo', TodoController::class);
    Route::resource('tags', TagController::class);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
