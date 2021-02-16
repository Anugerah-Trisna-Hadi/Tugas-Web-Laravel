<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataSiswaController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/Login', [LoginController::class, 'index']);
Route::get('/Logout', [LoginController::class, 'logout']);
Route::post('/PostLogin', [LoginController::class, 'PostLogin']);

Route::resource('/DataSiswa', DataSiswaController::class)->middleware('auth');