<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ParlorController;
use App\Http\Controllers\DataController;


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
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(AreaController::class)->middleware(['auth'])->group(function(){
    Route::get('/', [AreaController::class, 'top'])->name('top');
    Route::get('/areas/{area}', [AreaController::class,'index'])->name('index');
});

Route::controller(ParlorController::class)->middleware(['auth'])->group(function(){
    Route::get('/parlors', [ParlorController::class, 'index'])->name('index');
    Route::get('/parlors/create', [ParlorController::class, 'create'])->name('create');
    Route::get('/parlors/{parlor}', [ParlorController::class ,'show'])->name('show');
    Route::get('/parlors/{parlor}/edit', [ParlorController::class, 'edit'])->name('edit');
    Route::post('/parlors', [ParlorController::class, 'store'])->name('store');
    Route::put('/parlors/{parlor}', [ParlorController::class, 'update'])->name('update');
    Route::delete('/parlors/{parlor}', [ParlorController::class,'delete'])->name('delete');
});

Route::controller(DataController::class)->middleware(['auth'])->group(function(){
    Route::get('/datas', [DataController::class, 'index'])->name('index');
    Route::get('/datas/create', [DataController::class, 'create'])->name('create');
    Route::get('/datas/{data}', [DataController::class ,'show'])->name('show');
    Route::get('/datas/{data}/edit', [DataController::class, 'edit'])->name('edit');
    Route::post('/datas', [DataController::class, 'store'])->name('store');
    Route::put('/datas/{data}', [DataController::class, 'update'])->name('update');
    Route::delete('/datas/{data}', [DataController::class,'delete'])->name('delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

;
