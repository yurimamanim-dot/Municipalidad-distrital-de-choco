<?php

use Illuminate\Support\Facades\Route;

// Controladores públicos
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MesaDePartesController;
use App\Http\Controllers\NoticiaController;

// Controladores de gestión (admin / autenticados)
use App\Http\Controllers\TramiteAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;

/* ========================================================================
 |  SITIO PÚBLICO
 |  - Página principal y secciones públicas sin autenticación
 * ===================================================================== */

// Página principal (Solo una vez)
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// Página "Tu Municipalidad"
Route::view('/la-municipalidad', 'la-municipalidad')->name('la-municipalidad');

// Páginas internas de "Tu Municipalidad"
Route::view('/la-municipalidad/mision', 'mision')->name('mision');
Route::view('/la-municipalidad/vision', 'vision')->name('vision');
Route::view('/la-municipalidad/historia', 'historia')->name('historia');
Route::view('/la-municipalidad/organigrama', 'organigrama')->name('organigrama');
Route::view('/la-municipalidad/valores', 'valores')->name('valores');
Route::view('/la-municipalidad/equipo-gestion', 'equipo-gestion')->name('equipo-gestion');

// Noticias públicas
Route::get('/noticias',        [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica' ])->name('noticias.show');

// Mesa de Partes (público)
Route::view('/mesa-de-partes', 'mesa')->name('mesa');
Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])->name('mesa.enviar');

// Confirmación de envío
Route::get('/mesa-de-partes/confirmacion', function () {
    abort_unless(session()->has('expediente'), 404);
    return view('mesa-confirmacion', [
        'expediente' => session('expediente'),
        'nombre'     => session('nombre'),
        'correo'     => session('correo'),
    ]);
})->name('mesa.confirmacion');


/* ========================================================================
 |  ÁREA AUTENTICADA (Usuarios logueados)
 * ===================================================================== */

Route::middleware('auth')->group(function () {

    // Dashboard general (Breeze) - Redirecciona al dashboard admin si prefieres
    // O simplemente muestra la vista dashboard.blade.php
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* --------------------------------------------------------------------
     |  ADMIN PORTAL (/admin)
     * ------------------------------------------------------------------ */
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard del panel admin (CORREGIDO: Sin el redirect infinito)
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

        // Configuración
        Route::view('/configuracion', 'admin.config')->name('config');

        // Trámites
        Route::get('/tramites', [TramiteAdminController::class, 'index'])->name('tramites.index');
        Route::patch('/tramites/{tramite}/estado', [TramiteAdminController::class, 'updateEstado'])->name('tramites.estado');

        // Noticias (Resource)
        Route::resource('noticias', NoticiaController::class)->except(['show']);

        // Usuarios (Resource)
        // NOTA: La protección de que SOLO el admin entre aquí la tienes en el UsuarioController.
        Route::resource('usuarios', UsuarioController::class)
            ->except(['show'])
            ->names('usuarios');
    });
});

require __DIR__ . '/auth.php';