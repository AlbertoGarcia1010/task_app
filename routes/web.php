<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('task.index');
});

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/save', [TaskController::class, 'save']);
Route::get('/task/edit/{id}', [TaskController::class, 'edit'])->name('task.edit');
Route::post('/task/update/{id}', [TaskController::class, 'update']);
Route::post('/task/delete/{id}', [TaskController::class, 'delete'])->name('task.destroy');
Route::get('/task/detail/{id}', [TaskController::class, 'detail']);


