@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mx-auto max-w-6xl space-y-8">

        {{-- Encabezado --}}
        <div class="flex flex-col gap-1">
            <h1 class="text-3xl font-extrabold text-gray-900 md:text-4xl">
                Dashboard
            </h1>
            <p class="text-sm text-gray-600 md:text-base">
                Accesos rápidos y métricas clave de gestión del portal municipal.
            </p>
        </div>

        {{-- Tarjetas principales --}}
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- 1. NOTICIAS (Visible para todos) --}}
            <div class="flex min-h-[180px] flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div>
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="text-lg font-bold text-gray-900">
                            Gestión de Noticias
                        </h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">
                            newsmode
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">
                        Administrar publicaciones, comunicados y notas de prensa.
                    </p>
                </div>

                <a href="{{ route('admin.noticias.index') }}"
                   class="mt-2 inline-flex h-10 items-center justify-center rounded-md bg-primary px-4 text-sm font-semibold text-white hover:bg-primary/90">
                    Gestionar noticias
                </a>
            </div>

            {{-- 2. MESA DE PARTES (Visible para todos) --}}
            <div class="flex min-h-[180px] flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                <div>
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="text-lg font-bold text-gray-900">
                            Mesa de Partes
                        </h3>
                        <span class="material-symbols-outlined text-2xl text-blue-900">
                            description
                        </span>
                    </div>
                    <p class="mt-3 text-sm text-gray-600">
                        Revisar solicitudes y expedientes recibidos desde el portal.
                    </p>
                </div>

                <a href="{{ route('admin.tramites.index') }}"
                   class="mt-2 inline-flex h-10 items-center justify-center rounded-md bg-primary px-4 text-sm font-semibold text-white hover:bg-primary/90">
                    Ver trámites
                </a>
            </div>

            {{-- 3. USUARIOS (Solo Admin) --}}
            @if(auth()->user()->isAdmin())
                <div class="flex min-h-[180px] flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-5 shadow-sm">
                    <div>
                        <div class="flex items-center justify-between gap-3">
                            <h3 class="text-lg font-bold text-gray-900">
                                Gestión de Usuarios
                            </h3>
                            <span class="material-symbols-outlined text-2xl text-blue-900">
                                group
                            </span>
                        </div>
                        <p class="mt-3 text-sm text-gray-600">
                            Administrar cuentas, roles y permisos del personal.
                        </p>
                    </div>

                    <a href="{{ route('admin.usuarios.index') }}"
                       class="mt-2 inline-flex h-10 items-center justify-center rounded-md bg-primary px-4 text-sm font-semibold text-white hover:bg-primary/90">
                        Gestionar usuarios
                    </a>
                </div>
            @endif

        </div>
    </div>
@endsection
