<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifas\TarifasController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])
->resource('tarifas',TarifasController::class)
->names('tarifas');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
