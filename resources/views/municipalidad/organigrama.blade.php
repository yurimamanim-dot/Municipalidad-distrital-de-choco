@extends('layouts.municipal')

@section('title', 'Organigrama - Municipalidad')

@section('content')

{{-- Estilos específicos para el árbol del organigrama --}}
<style>
    .org-chart ul {
        padding-top: 20px;
        position: relative;
        transition: all 0.5s;
        display: flex;
        justify-content: center;
    }
    .org-chart li {
        float: left;
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
        transition: all 0.5s;
    }

    /* Líneas */
    .org-chart li::before,
    .org-chart li::after {
        content: '';
        position: absolute;
        top: 0;
        right: 50%;
        border-top: 2px solid #E3F2FD;
        width: 50%;
        height: 20px;
    }
    .org-chart li::after {
        right: auto;
        left: 50%;
        border-left: 2px solid #E3F2FD;
    }
    .org-chart li:only-child::after,
    .org-chart li:only-child::before {
        display: none;
    }
    .org-chart li:only-child {
        padding-top: 0;
    }
    .org-chart li:first-child::before,
    .org-chart li:last-child::after {
        border: 0 none;
    }
    .org-chart li:last-child::before {
        border-right: 2px solid #E3F2FD;
        border-radius: 0 5px 0 0;
    }
    .org-chart li:first-child::after {
        border-radius: 5px 0 0 0;
    }
    .org-chart ul ul::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        border-left: 2px solid #E3F2FD;
        width: 0;
        height: 20px;
    }

    .org-chart li > div {
        border-radius: 0.75rem;
        padding: 16px 18px;
        display: inline-block;
        min-width: 170px;
        transition: all 0.25s ease-out;
        background-color: #ffffff;
        z-index: 10;
        position: relative;
        box-shadow: 0 6px 14px rgba(15, 23, 42, 0.08);
    }

    .org-chart li > div h3 {
        margin-bottom: 4px;
    }

    .org-chart li > div:hover {
        transform: translateY(-4px) scale(1.02);
        box-shadow: 0 10px 22px rgba(15, 23, 42, 0.12);
    }

    /* Scrollbar suave para el contenedor del organigrama */
    .custom-scrollbar::-webkit-scrollbar {
        height: 8px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #CBD5F5;
        border-radius: 9999px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background: #93C5FD;
    }
</style>

<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-7xl flex-1 w-full gap-8 px-4 sm:px-6 lg:px-8">

        {{-- Navegación / Migas de pan --}}
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors"
               href="{{ route('inicio') }}">
                INICIO
            </a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors"
               href="{{ route('la-municipalidad') }}">
                TU MUNICIPALIDAD
            </a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">ORGANIGRAMA</span>
        </div>

        <div class="w-full bg-white rounded-2xl shadow-sm border border-gray-200 p-6 sm:p-8">
            {{-- Encabezado --}}
            <div class="flex flex-col items-center text-center mb-8 sm:mb-10 space-y-3">
                <h1 class="text-primary text-3xl sm:text-4xl font-black leading-tight tracking-tight">
                    Estructura Organizacional
                </h1>
                <p class="text-gray-600 text-sm sm:text-base max-w-2xl">
                    Conoce la organización y jerarquía de nuestra municipalidad, diseñada para servir
                    con eficiencia y cercanía a la comunidad.
                </p>
            </div>

            {{-- Contenedor con Scroll Horizontal para móviles --}}
            <div class="overflow-x-auto py-4 custom-scrollbar">
                <div class="org-chart min-w-[900px] flex justify-center">
                    <ul>
                        <li>
                            {{-- Nivel 1: Alcaldesa --}}
                            <div class="!bg-primary text-white border-2 border-primary">
                                <h3 class="font-bold text-lg">Alcaldesa</h3>
                                <p class="text-sm opacity-90">Eva Elizabeth Chura Quicaña</p>
                            </div>

                            <ul>
                                <li>
                                    {{-- Nivel 2: Gerencia Municipal --}}
                                    <div class="!bg-primary text-white/95">
                                        <h3 class="font-bold text-base">Gerencia Municipal</h3>
                                        <p class="text-xs opacity-90">Ana García</p>
                                    </div>

                                    <ul>
                                        {{-- Nivel 3: Subgerencias --}}
                                        <li>
                                            <div class="!bg-secondary text-white">
                                                <h3 class="font-bold text-base">Subgerencia de Obras</h3>
                                                <p class="text-xs opacity-90">Carlos Rodríguez</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white">
                                                <h3 class="font-bold text-base">Subgerencia de Servicios</h3>
                                                <p class="text-xs opacity-90">Luisa Martínez</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    {{-- Nivel 2: Administración --}}
                                    <div class="!bg-primary text-white/95">
                                        <h3 class="font-bold text-base">Gerencia de Administración</h3>
                                        <p class="text-xs opacity-90">Pedro Sánchez</p>
                                    </div>

                                    <ul>
                                        {{-- Nivel 3: Áreas Administrativas --}}
                                        <li>
                                            <div class="!bg-secondary text-white">
                                                <h3 class="font-bold text-base">Área de Recursos Humanos</h3>
                                                <p class="text-xs opacity-90">María López</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white">
                                                <h3 class="font-bold text-base">Área de Logística</h3>
                                                <p class="text-xs opacity-90">José Fernández</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white">
                                                <h3 class="font-bold text-base">Área de Tesorería</h3>
                                                <p class="text-xs opacity-90">Sofía Gómez</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>

            {{-- Nota final opcional --}}
            <p class="mt-4 text-xs sm:text-sm text-gray-500 text-center">
                La estructura puede actualizarse según las necesidades de la gestión municipal.
            </p>
        </div>
    </div>
</div>
@endsection
