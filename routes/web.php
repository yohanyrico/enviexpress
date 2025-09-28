<?php
namespace App\Http\Controllers\Envios;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tarifa\TarifaController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Envios\EnvioController;
use App\Http\Controllers\Guia\GuiaController;

Route::post('/registro', function (Request $request) {

    return redirect('/dashboard');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
     ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
     ->name('logout');

Route::get('/tarifas/create', [TarifaController::class, 'create'])->name('tarifas.create');
Route::get('/', function () {
    return view('welcome');
});


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

Route::get('/mapa-envios', function () {
    return redirect()->to('https://www.google.com/maps/dir/SENA+SALITRE,+Cra.+57c+%2364-29,+Bogot%C3%A1/Agencia+P%C3%BAblica+de+Empleo+SENA+Bogot%C3%A1,+Calle+65,+Bogot%C3%A1/@4.6619688,-74.0816973,15z/data=!4m15!4m14!1m5!1m1!1s0x8e3f9b070b5f0ff7:0xd2af7f8cc2875af0!2m2!1d-74.0837482!2d4.6654889!1m5!1m1!1s0x8e3f9a45d66a83a7:0x1f94d872e1550245!2m2!1d-74.0627015!2d4.6517369!3e0!5i2?entry=ttu&g_ep=EgoyMDI1MDkyNC4wIKXMDSoASAFQAw%3D%3D'); 
})->name('rastreo.maps');


Route::get('/envios', [EnvioController::class, 'index'])->name('envios.index');
Route::get('/envios/crear', [EnvioController::class, 'create'])->name('envios.create');
Route::post('/envios', [EnvioController::class, 'store'])->name('envios.store');
Route::get('/envios/{pedido}/editar', [EnvioController::class, 'edit'])->name('envios.edit');
Route::put('/envios/{pedido}', [EnvioController::class, 'update'])->name('envios.update');
Route::delete('/envios/{pedido}', [EnvioController::class, 'destroy'])->name('envios.destroy');

Route::post('/envios', [EnvioController::class, 'store'])->name('envios.store');

Route::get('/soporte', function () {
    return redirect()->away('https://wa.me/573203460836?text=Hola%20EnviExpress,%20necesito%20ayuda');
})->name('soporte');

