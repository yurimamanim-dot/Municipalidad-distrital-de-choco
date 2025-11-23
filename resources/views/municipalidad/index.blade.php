@extends('layouts.municipal')

@section('title', 'Tu Municipalidad - Municipalidad Distrital de Choco')

@section('content')
<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-5xl flex-1 w-full gap-8 px-4 sm:px-10">

        {{-- Navegación --}}
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">TU MUNICIPALIDAD</span>
        </div>

        {{-- Tarjeta del Alcalde --}}
        <div class="flex p-6 bg-white rounded-xl shadow-sm border border-gray-200">
            <div class="flex w-full flex-col gap-8 sm:flex-row sm:items-center">
                <img class="aspect-square rounded-full h-32 w-32 object-cover mx-auto sm:mx-0 border-4 border-gray-100 shadow-sm"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4sME5haCkHEQMima8SElvqjiyDSHcSNNsSKd2dIokFnF0CD0CL21sv_Df4dy4G1-G3pE7j2HWBYfGLxq-vzaXrMcyygV_5ibuW7Na7HaRG4KlotYPz3PTT8ON18NgJ8KxROSvUNzcJVsWiYP5hbkuzR5yqZueKvlwRPWcnPLkDZMW-6dR-uMlYO-aUZYcRljHMQt-TIdoviNWo-0OxFLsU0dlVWMHQZpZWHPUAOSGEC9fHsqNwDNvs01QpcDWcgT3uYIoFPtnx8ab" 
                     alt="Alcalde" />
                <div class="flex flex-col justify-center text-center sm:text-left">
                    <p class="text-primary text-2xl font-black uppercase tracking-wide">Franco Vidal Morales</p>
                    <p class="text-gray-500 text-base font-medium">Alcalde Distrital</p>
                    <p class="text-gray-700 text-base font-normal leading-relaxed mt-3 max-w-2xl">
                        Bienvenidos al portal de la Municipalidad. Trabajamos de la mano con los vecinos para construir un futuro mejor.
                    </p>
                </div>
            </div>
        </div>

        {{-- Menú de Accesos --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach([
                ['route' => 'mision', 'icon' => 'target', 'title' => 'Misión', 'desc' => 'Nuestro propósito fundamental.'],
                ['route' => 'vision', 'icon' => 'rocket_launch', 'title' => 'Visión', 'desc' => 'Nuestras aspiraciones futuras.'],
                ['route' => 'historia', 'icon' => 'history_edu', 'title' => 'Historia', 'desc' => 'Hitos importantes del distrito.'],
                ['route' => 'organigrama', 'icon' => 'account_tree', 'title' => 'Organigrama', 'desc' => 'Estructura jerárquica.'],
                ['route' => 'valores', 'icon' => 'verified_user', 'title' => 'Valores', 'desc' => 'Principios éticos.'],
                ['route' => 'equipo-gestion', 'icon' => 'groups', 'title' => 'Gestión', 'desc' => 'Nuestro equipo humano.'],
            ] as $item)
            <a href="{{ route($item['route']) }}" 
               class="group flex flex-col gap-4 rounded-xl border border-gray-200 bg-white p-6 shadow-sm transition-all hover:shadow-lg hover:-translate-y-1 hover:border-secondary">
                <div class="h-12 w-12 flex items-center justify-center rounded-full bg-blue-50 text-primary group-hover:bg-secondary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">{{ $item['icon'] }}</span>
                </div>
                <div>
                    <h2 class="text-lg font-bold text-gray-900 uppercase group-hover:text-primary">{{ $item['title'] }}</h2>
                    <p class="text-sm text-gray-500">{{ $item['desc'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection