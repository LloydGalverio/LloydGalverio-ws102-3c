<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;  
use App\Http\Controllers\Auth\LoginController; 
use App\Http\Controllers\BookController;   



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
 
Route::get('/dashboard', function () {
    return view('dashboard');  
})->name('dashboard')->middleware('auth'); 


//automatically generate rouetes for all the CRUD operations
Route::resource('books', BookController::class);

Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');
