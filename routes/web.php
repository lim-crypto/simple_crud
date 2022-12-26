<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);
Route::patch('/todo/{todo}/complete', [App\Http\Controllers\TodoController::class, 'complete'])->name('todo.complete');
Route::resource('todo', 'App\Http\Controllers\TodoController');