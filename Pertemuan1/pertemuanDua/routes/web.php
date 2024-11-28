<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
    Route::get("/",[BookController::class,'welcome'])->name('welcome');
    Route:: post('/store', [BookController::class,'store'])->name('store');
    Route::get('/create',[BookController::class,'create'])->name('create');

?>
