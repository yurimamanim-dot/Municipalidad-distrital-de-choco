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
    /* Líneas verticales */
    .org-chart li::before, .org-chart li::after {
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
    .org-chart li:only-child::after, .org-chart li:only-child::before {
        display: none;
    }
    .org-chart li:only-child {
        padding-top: 0;
    }
    .org-chart li:first-child::before, .org-chart li:last-child::after {
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
        border-radius: 0.5rem;
        padding: 16px;
        display: inline-block;
        min-width: 160px;
        transition: all 0.3s;
        background-color: white;
        z-index: 10;
        position: relative;
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

        <div class="w-full bg-white rounded-xl shadow-sm border border-gray-200 p-8">
            
            {{-- Encabezado --}}
            <div class="flex flex-col items-center text-center mb-10">
                <h1 class="text-primary text-4xl font-black leading-tight tracking-tight mb-3">
                    Estructura Organizacional
                </h1>
                <p class="text-gray-600 text-lg font-normal max-w-2xl">
                    Conoce la organización y jerarquía de nuestra municipalidad, diseñada para servir eficientemente a la comunidad.
                </p>
            </div>

            {{-- Contenedor con Scroll Horizontal para móviles --}}
            <div class="overflow-x-auto py-4 custom-scrollbar">
                <div class="org-chart min-w-[900px] flex justify-center">
                    <ul>
                        <li>
                            {{-- Nivel 1: Alcalde --}}
                            <div class="!bg-primary text-white shadow-lg hover:shadow-xl hover:-translate-y-1 border-2 border-primary">
                                <h3 class="font-bold text-lg">Alcalde</h3>
                                <p class="text-sm opacity-90">Juan Pérez</p>
                            </div>
                            <ul>
                                <li>
                                    {{-- Nivel 2: Gerencia Municipal --}}
                                    <div class="!bg-primary text-white shadow-md hover:shadow-lg">
                                        <h3 class="font-bold text-base">Gerencia Municipal</h3>
                                        <p class="text-xs opacity-90">Ana García</p>
                                    </div>
                                    <ul>
                                        {{-- Nivel 3: Subgerencias --}}
                                        <li>
                                            <div class="!bg-secondary text-white shadow-md hover:shadow-lg hover:-translate-y-1">
                                                <h3 class="font-bold text-base">Subgerencia de Obras</h3>
                                                <p class="text-xs opacity-90">Carlos Rodríguez</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white shadow-md hover:shadow-lg hover:-translate-y-1">
                                                <h3 class="font-bold text-base">Subgerencia de Servicios</h3>
                                                <p class="text-xs opacity-90">Luisa Martínez</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
                                    {{-- Nivel 2: Administración --}}
                                    <div class="!bg-primary text-white shadow-md hover:shadow-lg">
                                        <h3 class="font-bold text-base">Gerencia de Administración</h3>
                                        <p class="text-xs opacity-90">Pedro Sánchez</p>
                                    </div>
                                    <ul>
                                        {{-- Nivel 3: Áreas Administrativas --}}
                                        <li>
                                            <div class="!bg-secondary text-white shadow-md hover:shadow-lg">
                                                <h3 class="font-bold text-base">Área de Recursos Humanos</h3>
                                                <p class="text-xs opacity-90">María López</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white shadow-md hover:shadow-lg">
                                                <h3 class="font-bold text-base">Área de Logística</h3>
                                                <p class="text-xs opacity-90">José Fernández</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="!bg-secondary text-white shadow-md hover:shadow-lg">
                                                <h3 class="font-bold text-base">Área de Tesorería</h3>
                                                <p class="text-xs opacity-90">Sofia Gómez</p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection