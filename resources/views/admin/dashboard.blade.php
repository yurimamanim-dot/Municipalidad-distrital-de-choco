@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="max-w-6xl mx-auto space-y-8">
        <div class="flex flex-col gap-1">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900">
                Dashboard
            </h1>
            <p class="text-sm md:text-base text-gray-600">
                Accesos rápidos y métricas clave de gestión del portal municipal.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            
            {{-- 1. NOTICIAS (Visible para todos) --}}
            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <div>
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-gray-900">Gestión de Noticias</h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">newsmode</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        Administrar publicaciones y comunicados.
                    </p>
                </div>

                <a href="{{ route('admin.noticias.index') }}"
                   class="mt-4 inline-flex h-10 items-center justify-center rounded-md px-4 text-sm font-semibold text-white"
                   style="background-color:#003366;">
                    Gestionar noticias
                </a>
            </div>

            {{-- 2. MESA DE PARTES (Nuevo - Visible para todos) --}}
            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <div>
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-gray-900">Mesa de Partes</h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">description</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        Revisar solicitudes y expedientes recibidos.
                    </p>
                </div>

                <a href="{{ route('admin.tramites.index') }}"
                   class="mt-4 inline-flex h-10 items-center justify-center rounded-md px-4 text-sm font-semibold text-white"
                   style="background-color:#003366;">
                    Ver trámites
                </a>
            </div>

            {{-- 3. USUARIOS (Protegido - Solo Admin) --}}
            @if(auth()->user()->isAdmin())
                <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-gray-900">Gestión de Usuarios</h3>
                            <span class="material-symbols-outlined text-2xl text-blue-900">group</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">
                            Administrar cuentas y permisos de acceso.
                        </p>
                    </div>

                    <a href="{{ route('admin.usuarios.index') }}"
                       class="mt-4 inline-flex h-10 items-center justify-center rounded-md px-4 text-sm font-semibold text-white"
                       style="background-color:#003366;">
                        Gestionar usuarios
                    </a>
                </div>
            @endif

        </div>
    </div>
@endsection