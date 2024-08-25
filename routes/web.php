<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ParlorController;


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
/*
Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::post('/posts', [PostController::class, 'store']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class,'delete']);
*/
Route::get('/', [ParlorController::class, 'index']);
Route::get('/parlors/create', [ParlorController::class, 'create']);
Route::get('/parlors/{parlor}', [ParlorController::class ,'show']);
Route::get('/parlors/{parlor}/edit', [ParlorController::class, 'edit']);
Route::post('/parlors', [ParlorController::class, 'store']);
Route::put('/parlors/{parlor}', [ParlorController::class, 'update']);
Route::delete('/parlors/{parlor}', [ParlorController::class,'delete']);