<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaDePartesController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TramiteAdminController;

// Página principal pública
Route::view('/', 'home')->name('home');

// Mesa de Partes (público)
Route::view('/mesa-de-partes', 'mesa')->name('mesa');
Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])
    ->name('mesa.enviar');

Route::get('/mesa-de-partes/confirmacion', function () {
    abort_unless(session()->has('expediente'), 404);

    return view('mesa-confirmacion', [
        'expediente' => session('expediente'),
        'nombre' => session('nombre'),
        'correo' => session('correo'),
    ]);
})->name('mesa.confirmacion');

// Página "La Municipalidad" (pública)
Route::get('/la-municipalidad', function () {
    return view('la-municipalidad');
})->name('la-municipalidad');

// Noticias públicas
Route::get('/noticias', [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica'])->name('noticias.show');

// -------------- RUTAS PROTEGIDAS (requieren login) --------------
Route::middleware(['auth'])->group(function () {

    // Dashboard por defecto de Breeze
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Panel /admin
    Route::prefix('admin')->name('admin.')->group(function () {

        // Trámites
        Route::get('/tramites', [TramiteAdminController::class, 'index'])
            ->name('tramites.index');

        Route::patch('/tramites/{tramite}/estado', [TramiteAdminController::class, 'updateEstado'])
            ->name('tramites.estado');

        // Noticias (admin)
        Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
        Route::get('/noticias/crear', [NoticiaController::class, 'create'])->name('noticias.create');
        Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
        Route::get('/noticias/{noticia}/editar', [NoticiaController::class, 'edit'])->name('noticias.edit');
        Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
        Route::delete('/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
    });
});

// Rutas de autenticación creadas por Breeze (login, register, etc.)
require __DIR__ . '/auth.php';
