<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('master', function () {
    return view('test');
})->name('master');



Route::resource('decaissements',\App\Http\Controllers\DecaissementController::class);
