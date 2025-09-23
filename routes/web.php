<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifas\TarifasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guias', function () {
    return view('auth.guias');   // nombre del archivo: resources/views/guias.blade.php
})->name('guias');

Route::get('/nosotros', function () {
    return view('nosotros'); // Asumiendo que tienes una vista llamada "nosotros.blade.php"
})->name('nosotros');


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
