<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MesaDePartesController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TramiteAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;

/* ========================================================================
 |  SITIO PÚBLICO
 * ===================================================================== */

// Inicio
Route::get('/', [InicioController::class, 'index'])->name('inicio');

// --- SECCIÓN "TU MUNICIPALIDAD" (Carpeta nueva) ---
Route::view('/la-municipalidad',                'municipalidad.index')->name('la-municipalidad');
Route::view('/la-municipalidad/mision',         'municipalidad.mision')->name('mision');
Route::view('/la-municipalidad/vision',         'municipalidad.vision')->name('vision');
Route::view('/la-municipalidad/historia',       'municipalidad.historia')->name('historia');
Route::view('/la-municipalidad/organigrama',    'municipalidad.organigrama')->name('organigrama');
Route::view('/la-municipalidad/valores',        'municipalidad.valores')->name('valores');
Route::view('/la-municipalidad/equipo-gestion', 'municipalidad.equipo-gestion')->name('equipo-gestion');

// Noticias
Route::get('/noticias',        [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica'])->name('noticias.show');

// Página de Programas
// Página de Programas


Route::view('/programas-sociales', 'programas-sociales')->name('programas.sociales');


// Mesa de Partes
Route::view('/mesa-de-partes', 'mesa')->name('mesa');
Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])->name('mesa.enviar');

// Confirmación (Sin error 404)
Route::get('/mesa-de-partes/confirmacion', function () {
    $expediente = session('expediente');
    $nombre     = session('nombre');
    $correo     = session('correo');

    if (!$expediente) {
        $expediente = 'EXP-GENERADO';
        $nombre     = 'Usuario Reciente';
        $correo     = 'correo@registrado.com';
    }

    return view('mesa-confirmacion', [
        'expediente' => $expediente,
        'nombre'     => $nombre,
        'correo'     => $correo,
    ]);
})->name('mesa.confirmacion');


/* ========================================================================
 |  ÁREA ADMIN (Protegida)
 * ===================================================================== */

Route::middleware('auth')->group(function () {

    // Redirección del dashboard por defecto de Breeze al de Admin
    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Panel de Administración
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

        // Trámites
        Route::get('/tramites', [TramiteAdminController::class, 'index'])->name('tramites.index');
        Route::patch('/tramites/{tramite}/estado', [TramiteAdminController::class, 'updateEstado'])->name('tramites.estado');

        // Noticias
        Route::resource('noticias', NoticiaController::class)->except(['show']);

        // Usuarios
        Route::resource('usuarios', UsuarioController::class)
            ->except(['show'])
            ->names('usuarios');
    });
});

require __DIR__ . '/auth.php';
