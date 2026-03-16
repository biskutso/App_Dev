<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController as uc;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [uc::class, 'index']);
Route::post('/user/store', [uc::class,'store']);
Route::get('/user/edit/{id}', [uc::class,'edit']);
Route::put('/user/update/{id}', [uc::class,'update']);
Route::delete('/user/delete/{id}', [uc::class,'delete']);
