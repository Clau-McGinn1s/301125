<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/edit', [TodoController::class, 'edit']);
Route::get('/new', [TodoController::class, 'new']);

Route::resource('todos', TodoController::class)->only([
    'store', 'edit', 'update', 'destroy'
]);


