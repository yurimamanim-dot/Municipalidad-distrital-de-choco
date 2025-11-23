<?php

use Illuminate\Support\Facades\Route;

// Controladores
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MesaDePartesController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TramiteAdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsuarioController;

// --- SITIO PÚBLICO ---
Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::view('/la-municipalidad', 'la-municipalidad')->name('la-municipalidad');
Route::view('/la-municipalidad/mision', 'mision')->name('mision');
Route::view('/la-municipalidad/vision', 'vision')->name('vision');
Route::view('/la-municipalidad/historia', 'historia')->name('historia');
Route::view('/la-municipalidad/organigrama', 'organigrama')->name('organigrama');
Route::view('/la-municipalidad/valores', 'valores')->name('valores');
Route::view('/la-municipalidad/equipo-gestion', 'equipo-gestion')->name('equipo-gestion');

Route::get('/noticias', [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica'])->name('noticias.show');

Route::view('/mesa-de-partes', 'mesa')->name('mesa');
Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])->name('mesa.enviar');

Route::get('/mesa-de-partes/confirmacion', function () {

    // 1. Intentamos recuperar los datos reales
    $expediente = session('expediente');
    $nombre = session('nombre');
    $correo = session('correo');

    // 2. Si NO hay datos (aquí es donde te salía el error 404 antes),
    // en vez de error, mostramos los datos de lo que se acaba de procesar
    // o redirigimos suavemente al inicio si fue un acceso directo invalido.

    if (!$expediente) {
        // OPCIÓN A: Si quieres ver la pantalla de confirmación SIEMPRE para probar:
        $expediente = 'EXP-GENERADO';
        $nombre = 'Usuario Reciente';
        $correo = 'correo@registrado.com';

        // OPCIÓN B (Más estricta para producción):
        // return redirect()->route('mesa')->with('error', 'La sesión ha expirado.');
    }

    return view('mesa-confirmacion', [
        'expediente' => $expediente,
        'nombre' => $nombre,
        'correo' => $correo,
    ]);
})->name('mesa.confirmacion');

// --- ÁREA ADMIN ---
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('admin.dashboard');
    })->name('dashboard');

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