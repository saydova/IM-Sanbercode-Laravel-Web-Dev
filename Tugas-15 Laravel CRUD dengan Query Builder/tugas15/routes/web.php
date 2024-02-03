<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/register', [AuthController::class, 'reg']);
Route::get('/welcome', [AuthController::class, 'wel']);

Route::post('/kirim', [AuthController::class, 'kirim']);

Route::get('/category/create', [CategoriesController::class, 'create']);
Route::post('/category', [CategoriesController::class, 'store']);
Route::get('/category', [CategoriesController::class, 'store']);


Route::get('/category/{id}', [CategoriesController::class, 'show']);

Route::get('/category/{id}/edit', [CategoriesController::class, 'edit']);
Route::put('/category/{id}', [CategoriesController::class, 'update']);
Route::delete('/category/{id}', [CategoriesController::class, 'destroy']);
