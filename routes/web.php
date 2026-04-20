<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as uc;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', [uc::class, 'index']);
// Route::post('/user/store', [uc::class,'store']);
// Route::get('/user/edit/{id}', [uc::class,'edit']);
// Route::put('/user/update/{id}', [uc::class,'update']);
// Route::delete('/user/delete/{id}', [uc::class,'delete']);

Route::get('/', [uc::class, 'index'])->name('home');
Route::post('/users', [uc::class, 'store'])->name('user.store');
Route::get('/users/{id}', [uc::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}', [uc::class, 'edit'])->name('user.edit');
Route::post('/users/update/{id}', [uc::class, 'update'])->name('user.update');
Route::delete('/users/{id}', [uc::class,'destroy'])->name('user.destroy');

