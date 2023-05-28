<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/users', [UserController::class, 'index'])->middleware('is_admin');
Route::post('/users/approval/{id}', [UserController::class, 'approval'])->middleware('is_admin');
Route::post('/users/admin/{id}', [UserController::class, 'admin'])->middleware('is_admin');
