<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('decaissements',\App\Http\Controllers\DecaissementController::class);
