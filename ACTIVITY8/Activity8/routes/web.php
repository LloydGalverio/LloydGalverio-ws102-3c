<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('insert', [StudentController::class, 'insertform']);
Route::post('create', [StudentController::class, 'insert']);

Route::get('read', [StudentController::class, 'read']);

Route::get('edit/{id}', [StudentController::class, 'updateStudent']);
Route::post('update/{id}', [StudentController::class, 'update']);

Route::get('delete/{id}', [StudentController::class, 'delete']);

