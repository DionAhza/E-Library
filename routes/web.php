<?php

use App\Http\Controllers\GenresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

 Route::get('/genre',[GenresController::class, 'index'])->name('genre.index');
 Route::get('/genre/create',[GenresController::class, 'create'])->name('genre.create');
 Route::post('/genre/create',[GenresController::class, 'store'])->name('genre.store');