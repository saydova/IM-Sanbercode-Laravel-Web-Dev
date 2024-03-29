<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [HomeController::class, 'utama']);

Route::get('/master', [AuthController::class, 'mstr']);
Route::get('/welcome', [AuthController::class, 'wel']);

Route::post('/kirim', [AuthController::class, 'kirim']);
Route::get('/datatable', [HomeController::class, 'dt']);