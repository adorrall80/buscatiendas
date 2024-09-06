<?php

use App\Http\Controllers\inicioController;
use Illuminate\Support\Facades\Route;


Route::get('/', [inicioController::class, 'index'])->name('inicio.index');
Route::get('/informacion/{slug}', [InicioController::class, 'info'])->name('inicio.info');
Route::get('/tiendas', function () { return view('tienda.listado_tiendas');});







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
