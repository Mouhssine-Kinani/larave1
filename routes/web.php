<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/movies', [FilemController::class, 'index']);

Route::resource('films', FilmController::class);