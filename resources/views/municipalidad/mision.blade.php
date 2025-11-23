@extends('layouts.municipal')
@section('title', 'Misión - Municipalidad')
@section('content')
<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-5xl flex-1 w-full gap-8 px-4 sm:px-10">
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a class="text-gray-500 text-sm font-medium hover:text-secondary" href="{{ route('inicio') }}">INICIO</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <a class="text-gray-500 text-sm font-medium hover:text-secondary" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">MISIÓN</span>
        </div>
        <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-200 text-center md:text-left">
            <h1 class="text-primary text-4xl font-black mb-6">Nuestra Misión</h1>
            <p class="text-gray-600 text-lg leading-relaxed">
                Contribuir al bienestar de los vecinos a través de una gestión transparente, eficiente y sostenible, promoviendo el desarrollo integral de nuestro distrito y mejorando la calidad de los servicios públicos.
            </p>
        </div>
    </div>
</div>
@endsection