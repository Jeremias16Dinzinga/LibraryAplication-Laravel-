<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('books/', [BookController::class, 'index']);
Route::get('books/show/{id}', [BookController::class, 'show']);
Route::get('books/create', [BookController::class, 'create']);
Route::post('books/', [BookController::class, 'store']);
Route::Get('books/{id}/edit', [BookController::class, 'edit']);
Route::Put('books/{id}', [BookController::class, 'update']);
Route::get('books/delete/{id}', [BookController::class, 'destroy']);


