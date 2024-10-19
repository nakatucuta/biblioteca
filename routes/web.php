<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('welcome');
});

// modificacion de las rutas  principales para indetificar el controlador
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [LibroController::class, 'index'])->name('dashboard');
});


// Recurso para libros (CRUD completo)
Route::resource('libros', LibroController::class);  