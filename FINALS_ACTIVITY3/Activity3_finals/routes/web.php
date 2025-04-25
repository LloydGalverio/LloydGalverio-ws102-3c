<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', fn() => redirect('/students'));
Route::resource('students', StudentController::class);
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/students/qr/{id}', function ($id) {
    $student = App\Models\Student::findOrFail($id);  

 
    return response(QrCode::size(100)->generate($student->student_id), 200)
        ->header('Content-Type', 'image/svg+xml');  
})->name('students.qr');
