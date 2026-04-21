<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as usc;
use App\Http\Controllers\studentController as uc;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/users', [usc::class, 'index'])->name('uhome');
Route::post('/users/store', [usc::class, 'store'])->name('user.store');
Route::get('/users/{id}', [usc::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}', [usc::class, 'edit'])->name('user.edit');
Route::post('/users/update/{id}', [usc::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [usc::class,'destroy'])->name('user.destroy');

Route::get('/', [uc::class, 'index'])->name('home');
Route::post('/students', [uc::class, 'store'])->name('students.store');
Route::get('/students/{id}', [uc::class, 'show'])->name('students.show');
Route::get('/students/edit/{id}', [uc::class, 'edit'])->name('student.edit');
Route::post('/students/update/{id}', [uc::class, 'update'])->name('student.update');
Route::delete('/students/{id}', [uc::class,'destroy'])->name('student.destroy');