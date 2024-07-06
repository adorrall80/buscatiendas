<?php

use App\Http\Controllers\inicioController;
use Illuminate\Support\Facades\Route;


//Route::get('/',function(){   return view('tienda/inicio');});


//Route::resource('tienda.inicio',inicioConroller::class);
Route::get('/', [inicioController::class, 'index'])->name('inicio.index');

Route::get('/tiendas', function () {
    return view('listado_tiendas');
});
//listado_tiendas.blade

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
