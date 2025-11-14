<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

use App\Http\Controllers\MesaDePartesController;

Route::view('/', 'home')->name('home');
// Mesa De Partes
Route::view('/mesa-de-partes', 'mesa')->name('mesa');
Route::post('/mesa-de-partes/enviar', [MesaDePartesController::class, 'store'])
     ->name('mesa.enviar');
// Página "La Municipalidad"
Route::get('/la-municipalidad', function () {
    return view('la-municipalidad');
})->name('la-municipalidad');

     
Route::get('/mesa-de-partes/confirmacion', function () {
    abort_unless(session()->has('expediente'), 404);
    return view('mesa-confirmacion', [
        'expediente' => session('expediente'),
        'nombre'     => session('nombre'),
        'correo'     => session('correo'),
    ]);
})->name('mesa.confirmacion');



// (Opcional) Admin
Route::get('/admin/tramites', [\App\Http\Controllers\TramiteAdminController::class, 'index'])
     ->name('admin.tramites.index');
Route::patch('/admin/tramites/{tramite}/estado', [\App\Http\Controllers\TramiteAdminController::class, 'updateEstado'])
     ->name('admin.tramites.estado');


use App\Http\Controllers\NoticiaController;

// Rutas públicas
Route::get('/noticias', [NoticiaController::class, 'indexPublica'])->name('noticias.index');
Route::get('/noticias/{slug}', [NoticiaController::class, 'showPublica'])->name('noticias.show');

// Rutas de administración (panel interno)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
    Route::get('/noticias/crear', [NoticiaController::class, 'create'])->name('noticias.create');
    Route::post('/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
    Route::get('/noticias/{noticia}/editar', [NoticiaController::class, 'edit'])->name('noticias.edit');
    Route::put('/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
    Route::delete('/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');
});
