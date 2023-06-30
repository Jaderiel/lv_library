<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AppAuth;
use App\Http\Middleware\AppUserAuth;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware([AppAuth::class])->group(function () {
    // Route::get('/login', [AdminController::class, "login"]);
    // Route::post('/dynamicLogin', [AdminController::class, "dynamicLogin"]);

    Route::middleware([AppUserAuth::class])->group(function () {
        Route::get('/users', [AdminController::class, "users"]);
        Route::get('/books', [AdminController::class, "books"]);
        Route::get('/notes', [AdminController::class, "notes"]);
        
    });
});

// Route::get('/users', [AdminController::class, "users"]);
// Route::get('/books', [AdminController::class, "books"]);
// Route::get('/notes', [AdminController::class, "notes"]);

Route::post('/dynamicLogin', [AdminController::class, "login"]);
Route::post('/addnotes/{id}', [AdminController::class, 'userAddNote']);
Route::get('/getUserNotes/{id}', [AdminController::class, 'getUserNotes']);
Route::get('/getUserNote/{id}', [AdminController::class, 'getUserNote']);
Route::put('/updateNote/{id}', [AdminController::class, "updateNote"]);