<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('task.index');
});

Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/save', [TaskController::class, 'save']);
Route::get('/task/edit/{id}', [TaskController::class, 'edit']);
Route::post('/task/update/{id}', [TaskController::class, 'update']);
Route::get('/task/delete/{id}', [TaskController::class, 'delete']);
Route::get('/task/detail/{id}', [TaskController::class, 'detail']);


