<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'index']);
Route::get('/detail/{user}', [UserController::class, 'detail']);
Route::get('dataSiswa', [UserController::class, 'dataSiswa'])->middleware('admin');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/dashboard/user', adminController::class);
Route::resource('/dashboard/absen', AbsenController::class);

