<?php

use Illuminate\Support\Facades\Route;

// Controladores públicos
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

// Home (portada)
Route::view('/', 'home')->name('home');

// Página informativa “La Municipalidad”
Route::view('/la-municipalidad', 'la-municipalidad')->name('la-municipalidad');

// Noticias públicas (listado y detalle por slug)
Route::get('/noticias',        [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica'  ])->name('noticias.show');

// Mesa de Partes (público)
Route::view('/mesa-de-partes', 'mesa')->name('mesa');

Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])
    ->name('mesa.enviar');

// Confirmación de envío (accesible solo si hay datos en sesión)
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
 |  - Dashboard de Breeze, perfil y panel admin
 * ===================================================================== */

Route::middleware('auth')->group(function () {

    // Dashboard por defecto de Breeze (área usuario)
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // Perfil (Breeze)
    Route::get   ('/profile', [ProfileController::class, 'edit'   ])->name('profile.edit');
    Route::patch ('/profile', [ProfileController::class, 'update' ])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /* --------------------------------------------------------------------
     |  ADMIN PORTAL (/admin)
     |  - Panel interno con sidebar (dashboard, configuración y módulos)
     |  - Prefijo de URL /admin y prefijo de nombre admin.*
     * ------------------------------------------------------------------ */
    Route::prefix('admin')->name('admin.')->group(function () {

        // Dashboard del panel admin
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

        // Configuración del portal (vista placeholder)
        Route::view('/configuracion', 'admin.config')->name('config');

        /* ------------------------  Trámites (Mesa de Partes)  ------------------------ */
        Route::get  ('/tramites',                  [TramiteAdminController::class, 'index'       ])->name('tramites.index');
        Route::patch('/tramites/{tramite}/estado', [TramiteAdminController::class, 'updateEstado'])->name('tramites.estado');

        /* -----------------------------  Noticias (admin)  --------------------------- */
        Route::get   ('/noticias',                 [NoticiaController::class, 'index'  ])->name('noticias.index');
        Route::get   ('/noticias/crear',           [NoticiaController::class, 'create' ])->name('noticias.create');
        Route::post  ('/noticias',                 [NoticiaController::class, 'store'  ])->name('noticias.store');
        Route::get   ('/noticias/{noticia}/editar',[NoticiaController::class, 'edit'   ])->name('noticias.edit');
        Route::put   ('/noticias/{noticia}',       [NoticiaController::class, 'update' ])->name('noticias.update');
        Route::delete('/noticias/{noticia}',       [NoticiaController::class, 'destroy'])->name('noticias.destroy');

        /* -----------------------------  Usuarios (admin)  --------------------------- 
           Rutas: admin.usuarios.index, admin.usuarios.create, admin.usuarios.store, etc.
        */
        Route::resource('usuarios', UsuarioController::class)
            ->except(['show'])
            ->names('usuarios');
    });
});


/* ========================================================================
 |  RUTAS DE AUTENTICACIÓN (Breeze)
 * ===================================================================== */

require __DIR__.'/auth.php';
