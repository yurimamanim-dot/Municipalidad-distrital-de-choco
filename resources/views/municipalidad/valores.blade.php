@extends('layouts.municipal')
@section('title', 'Valores - Municipalidad')
@section('content')
<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-5xl flex-1 w-full gap-8 px-4 sm:px-10">
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a class="text-gray-500 text-sm font-medium hover:text-secondary" href="{{ route('inicio') }}">INICIO</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <a class="text-gray-500 text-sm font-medium hover:text-secondary" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">VALORES</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:border-secondary transition-colors">
                <h3 class="text-primary font-bold text-xl mb-2">Honestidad</h3>
                <p class="text-gray-600">Actuamos con rectitud y transparencia en el manejo de los recursos públicos.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:border-secondary transition-colors">
                <h3 class="text-primary font-bold text-xl mb-2">Responsabilidad</h3>
                <p class="text-gray-600">Cumplimos con nuestros deberes y asumimos las consecuencias de nuestras decisiones.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:border-secondary transition-colors">
                <h3 class="text-primary font-bold text-xl mb-2">Solidaridad</h3>
                <p class="text-gray-600">Trabajamos unidos para apoyar a los sectores más vulnerables de nuestro distrito.</p>
            </div>
            <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:border-secondary transition-colors">
                <h3 class="text-primary font-bold text-xl mb-2">Vocación de Servicio</h3>
                <p class="text-gray-600">Nuestra prioridad es atender las necesidades de nuestros vecinos con calidez y eficiencia.</p>
            </div>
        </div>
    </div>
</div>
@endsection