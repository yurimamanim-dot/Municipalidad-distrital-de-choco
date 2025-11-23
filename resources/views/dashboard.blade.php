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

        {{-- Grilla de Tarjetas --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- Card Noticias --}}
            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <div>
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-gray-900">Gestión de Noticias</h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">newsmode</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        Estado actual del blog de noticias.
                    </p>
                </div>

                <a href="{{ route('admin.noticias.index') }}"
                    class="mt-4 inline-flex h-10 items-center justify-center rounded-md px-4 text-sm font-semibold text-white"
                    style="background-color:#003366;">
                    Gestionar noticias
                </a>
            </div>

            {{-- Card Usuarios --}}
            @if(auth()->user()->isAdmin())
                <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-bold text-gray-900">Gestión de Usuarios</h3>
                            <span class="material-symbols-outlined text-2xl text-blue-900">group</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-600">
                            Administración de cuentas de acceso.
                        </p>
                    </div>


                    <a href="{{ route('admin.usuarios.index') }}"
                        class="mt-4 inline-flex h-10 items-center justify-center rounded-md px-4 text-sm font-semibold text-white"
                        style="background-color:#003366;">
                        Gestionar usuarios
                    </a>
                </div>
            @endif
            {{-- Card Configuración --}}
            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                <div>
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-bold text-gray-900">Configuración</h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">settings</span>
                    </div>
                    <p class="mt-4 text-sm text-gray-600">
                        Ajustes generales del portal.
                    </p>
                </div>

                <a href="{{ route('admin.config') }}" class="mt-4 inline-flex h-10 items-center justify-center rounded-md
                                  bg-emerald-600 px-4 text-sm font-semibold text-white hover:bg-emerald-700">
                    Ir a configuración
                </a>
            </div>
        </div>
    </div>
@endsection