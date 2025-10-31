<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/clear', [TaskController::class, 'clear'])->name('tasks.clear');
