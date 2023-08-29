<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\HomeController;
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

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home');

// COMICS
// index
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// show
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');
// edit
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
//delete
Route::delete('/comics/{comic}/destroy', [ComicController::class, 'destroy'])->name('comics.destroy');
