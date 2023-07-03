<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/users' , [UserController::class , 'index'])->name('users')->middleware('guest');
Route::get('/login' , [AuthController::class ,  'login'])->name('login')->middleware('guest');
Route::get('/register' , [AuthController::class ,  'register'])->name('register')->middleware('guest');
Route::get('/profil/{user}' , [ProfilController::class , 'create'])->middleware('auth')->name('profil.create');
