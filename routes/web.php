<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/post-login', [AuthController::class,'postLogin'])->name('login.post');

Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/post-register', [AuthController::class,'postRegister'])->name('register.post');


/*
|--------------------------------------------------------------------------
| Protected Routes (Harus Login)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');

    Route::resource('mahasiswas', MahasiswaController::class);

    Route::post('/logout',[AuthController::class,'logout'])->name('logout');

});
