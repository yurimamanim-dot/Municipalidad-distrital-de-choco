<x-app-layout>
    {{-- No usamos x-slot:header para que no se dibuje otra barra extra de Breeze --}}

    <div class="min-h-screen bg-gray-100">
        <div class="flex min-h-screen">

            {{-- SIDEBAR --}}
            <aside class="w-64 bg-white border-r border-gray-200 flex flex-col justify-between">
                <div class="px-4 pt-4 pb-6 space-y-8">
                    {{-- Logo + título --}}
                    <div class="flex items-center gap-3 px-1">
                        <div class="size-8 text-blue-900">
                            <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor" />
                            </svg>
                        </div>
                        <h1 class="text-lg font-bold text-blue-900">
                            Admin Portal
                        </h1>
                    </div>

                    {{-- Navegación --}}
                    <nav class="space-y-2 text-sm font-medium">
                        {{-- Dashboard activo --}}
                        <a href="{{ route('dashboard') }}"
                           class="flex items-center gap-3 rounded-lg px-3 py-2
                                  bg-emerald-100 text-emerald-700">
                            <span class="material-symbols-outlined text-xl">grid_view</span>
                            <span>Dashboard</span>
                        </a>

                        {{-- Noticias --}}
                        <a href="{{ route('admin.noticias.index') }}"
                           class="flex items-center gap-3 rounded-lg px-3 py-2
                                  text-gray-800 hover:bg-gray-100">
                            <span class="material-symbols-outlined text-xl">newspaper</span>
                            <span>Noticias</span>
                        </a>

                        {{-- Eventos --}}
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2
                                  text-gray-800 hover:bg-gray-100">
                            <span class="material-symbols-outlined text-xl">event</span>
                            <span>Eventos</span>
                        </a>

                        {{-- Usuarios --}}
                        <a href="#"
                           class="flex items-center gap-3 rounded-lg px-3 py-2
                                  text-gray-800 hover:bg-gray-100">
                            <span class="material-symbols-outlined text-xl">group</span>
                            <span>Usuarios</span>
                        </a>
                    </nav>
                </div>

                {{-- Parte baja del sidebar --}}
                <div class="border-t border-gray-200 px-4 py-4 space-y-2 text-sm font-medium">
                    <a href="#"
                       class="flex items-center gap-3 rounded-lg px-3 py-2
                              text-gray-800 hover:bg-gray-100">
                        <span class="material-symbols-outlined text-xl">settings</span>
                        <span>Configuración</span>
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="flex items-center gap-3 rounded-lg px-3 py-2
                                       text-red-700 hover:bg-red-50 w-full text-left">
                            <span class="material-symbols-outlined text-xl">logout</span>
                            <span>Cerrar sesión</span>
                        </button>
                    </form>
                </div>
            </aside>

            {{-- CONTENIDO PRINCIPAL --}}
            <div class="flex-1 flex flex-col">

                {{-- Barra superior interna del portal --}}
                <header class="flex items-center justify-between bg-white border-b border-gray-200 px-8 py-3">
                    <h2 class="text-lg font-bold text-blue-900">
                        Nombre del Municipio
                    </h2>

                    <div class="flex items-center gap-4">
                        <button
                            class="flex h-10 w-10 items-center justify-center rounded-full
                                   bg-gray-100 text-gray-800 hover:bg-gray-200">
                            <span class="material-symbols-outlined text-xl">notifications</span>
                        </button>
                        <div class="flex items-center gap-2">
                            <div class="bg-center bg-no-repeat bg-cover rounded-full size-10"
                                 style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDKPKLwm8D0TsMGE1z904Yt4DfM3qq7HfFKp9cj_SrMx5hfp4_ISe-O7akoypya6WqDOdQr8SaRibKlBw1wEhZBuQdV-TEUVYCK-Dqtx-Rr7aOR6ygDttsM5bBmwI42ThE1lLyBOFVoNWG1QDF4KzYeBxkbJNPvrDfutjeuMlXnwfBgrxcu6v6D5h8cZObLg4pOZdMYzPcMXJhJX4KX92qcP3AbpjWNC3aTJJL7es6C0T6to_-E5cDs3b9czhYBJpkUI1JQpiOwbXXx");'>
                            </div>
                        </div>
                    </div>
                </header>

                {{-- MAIN --}}
                <main class="flex-1 px-8 py-8">
                    <div class="max-w-6xl mx-auto flex flex-col gap-8">

                        {{-- Título y descripción --}}
                        <div class="flex flex-col gap-1">
                            <p class="text-3xl md:text-4xl font-extrabold text-gray-900">
                                Dashboard
                            </p>
                            <p class="text-sm md:text-base text-gray-600">
                                Accesos rápidos y métricas clave de gestión.
                            </p>
                        </div>

                        {{-- TARJETAS --}}
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                            {{-- CARD: Noticias --}}
                            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                                <div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-bold text-gray-900">
                                            Gestión de Noticias
                                        </h3>
                                        <span class="material-symbols-outlined text-2xl text-blue-900">
                                            calendar_month
                                        </span>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600">
                                        Borradores:
                                        <span class="font-semibold text-gray-900">5</span>
                                    </p>
                                    <p class="text-sm text-gray-600">
                                        Publicados:
                                        <span class="font-semibold text-gray-900">87</span>
                                    </p>
                                </div>

                                {{-- Botón Noticias (color forzado) --}}
                                <a href="{{ route('admin.noticias.index') }}"
                                   class="mt-4 inline-flex items-center justify-center h-10 rounded-md px-4 text-sm font-semibold text-white"
                                   style="background-color:#003366;">
                                    Gestionar Noticias
                                </a>
                            </div>

                            {{-- CARD: Usuarios --}}
                            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                                <div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-bold text-gray-900">
                                            Gestión de Usuarios
                                        </h3>
                                        <span class="material-symbols-outlined text-2xl text-blue-900">
                                            group
                                        </span>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600">
                                        Usuarios Activos:
                                        <span class="font-semibold text-gray-900">1,250</span>
                                    </p>
                                    <p class="text-sm text-gray-600">
                                        Nuevos (mes):
                                        <span class="font-semibold text-gray-900">32</span>
                                    </p>
                                </div>

                                {{-- Botón Usuarios (color forzado) --}}
                                <a href="#"
                                   class="mt-4 inline-flex items-center justify-center h-10 rounded-md px-4 text-sm font-semibold text-white"
                                   style="background-color:#003366;">
                                    Gestionar Usuarios
                                </a>
                            </div>

                            {{-- CARD: Configuración --}}
                            <div class="flex flex-col justify-between gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm">
                                <div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="text-lg font-bold text-gray-900">
                                            Configuración
                                        </h3>
                                        <span class="material-symbols-outlined text-2xl text-blue-900">
                                            settings
                                        </span>
                                    </div>
                                    <p class="mt-4 text-sm text-gray-600">
                                        Ajustes generales del portal y del sistema.
                                    </p>
                                </div>

                                {{-- Botón Configuración (ya funcionaba en verde) --}}
                                <a href="#"
                                   class="mt-4 inline-flex items-center justify-center h-10 rounded-md
                                          bg-emerald-600 px-4 text-sm font-semibold text-white hover:bg-emerald-700">
                                    Ir a Configuración
                                </a>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</x-app-layout>
