<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BorrowRecordController;

use App\Http\Controllers\BookController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\MemberController;


Route::resource('books', BookController::class);
Route::resource('staff', StaffController::class);
Route::resource('members', MemberController::class);
Route::resource('borrow_records', BorrowRecordController::class);



Route::get('/', function () {
    return view('books.create');
});
