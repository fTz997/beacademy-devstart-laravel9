<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  UserController,
  ViaController
};

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/{id}',[UserController::class,'show'])->name('users.show');


Route::get('/viacep', [ViaController::class,'index'])->name('viacep.index');
Route::post('/viacep', [ViaController::class,'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaController::class, 'show'])->name('viacep.show');