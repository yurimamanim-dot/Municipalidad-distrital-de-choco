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
