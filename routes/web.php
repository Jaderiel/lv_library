<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::get('/users', [AdminController::class, "users"]);
Route::get('/user', [AdminController::class, "createUser"]);
Route::post('/user', [AdminController::class, "storeUser"]);
Route::get('/books', [AdminController::class, "books"]);
Route::get('/book', [AdminController::class, "addBook"]);
Route::post('/book', [AdminController::class, "storeBook"]);