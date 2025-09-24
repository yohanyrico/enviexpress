<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifas\TarifasController;
use Illuminate\Http\Request;

Route::post('/registro', function (Request $request) {
    // Aquí procesas y guardas los datos del formulario
    // Ejemplo: User::create([...]);

    // Después de guardar, redirige al dashboard
    return redirect('/dashboard');
});

Route::get('/tarifas/create', [TarifasController::class, 'create'])->name('tarifas.create');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/guias', function () {
    return view('auth.guias'); 
})->name('guias');

Route::get('/nosotros', function () {
    return view('nosotros'); 
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

