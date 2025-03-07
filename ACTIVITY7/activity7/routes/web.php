<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('info',[PersonalController::class , 'createInfo'])->name('info');
Route::post('info', [PersonalController::class ,'storeInfo']);