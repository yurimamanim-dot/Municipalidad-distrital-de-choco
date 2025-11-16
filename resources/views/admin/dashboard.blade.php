@extends('layouts.admin')
@section('title','Dashboard - Admin')
@section('header','Dashboard')

@section('content')
<div class="grid gap-6 md:grid-cols-3">
  <div class="bg-white rounded-xl p-5 border">
    <div class="flex items-center justify-between">
      <h3 class="font-bold">Gestión de Noticias</h3>
      <span class="material-symbols-outlined text-gray-500">event_note</span>
    </div>
    <p class="text-sm text-gray-500 mt-1">Borradores: 5 — Publicados: 87</p>
    <a href="{{ route('noticias.index') }}" class="mt-4 inline-flex items-center justify-center w-full h-10 rounded-lg bg-primary text-white hover:opacity-90">Gestionar Noticias</a>
  </div>

  <div class="bg-white rounded-xl p-5 border">
    <div class="flex items-center justify-between">
      <h3 class="font-bold">Gestión de Usuarios</h3>
      <span class="material-symbols-outlined text-gray-500">group</span>
    </div>
    <p class="text-sm text-gray-500 mt-1">Activos: 1250 — Nuevos (mes): 32</p>
    <a href="{{ route('usuarios.index') }}" class="mt-4 inline-flex items-center justify-center w-full h-10 rounded-lg bg-primary text-white hover:opacity-90">Gestionar Usuarios</a>
  </div>

  <div class="bg-white rounded-xl p-5 border">
    <div class="flex items-center justify-between">
      <h3 class="font-bold">Configuración</h3>
      <span class="material-symbols-outlined text-gray-500">settings</span>
    </div>
    <p class="text-sm text-gray-500 mt-1">Ajustes del portal y del sistema.</p>
    <a href="{{ route('admin.config') }}" class="mt-4 inline-flex items-center justify-center w-full h-10 rounded-lg bg-green-600 text-white hover:bg-green-700">Ir a Configuración</a>
  </div>
</div>
@endsection
