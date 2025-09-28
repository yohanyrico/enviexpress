<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifas\TarifasController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::post('/registro', function (Request $request) {
    // Aquí procesas y guardas los datos del formulario
    // Ejemplo: User::create([...]);

    // Después de guardar, redirige al dashboard
    return redirect('/dashboard');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
     ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
     ->name('logout');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/guias', function () {
    return view('auth.guias'); 
})->name('guias');

Route::get('/nosotros', function () {
    return view('auth.nosotros'); 
})->name('nosotros');


Route::resource('tarifas', TarifaController::class)
        ->names('tarifas')
        ->parameters(['tarifas' => 'tarifa']);

Route::resource('guias', GuiaController::class)
        ->names('guias')
        ->parameters(['guias' => 'guia']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

