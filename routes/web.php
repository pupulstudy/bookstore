<?php

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

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\RatingController;

Route::get('/books', [BookController::class, 'index']);
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/rating', [RatingController::class, 'create']);
Route::post('/rating', [RatingController::class, 'store']);
