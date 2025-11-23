@extends('layouts.municipal')

@section('title', 'Historia - Municipalidad')

@section('content')
<div class="flex flex-1 justify-center py-10 bg-gray-50 min-h-screen">
    <div class="flex flex-col max-w-6xl flex-1 w-full gap-8 px-4 sm:px-6 lg:px-8">
        
        <div class="flex flex-wrap gap-2 px-4 py-2">
            <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <a class="text-gray-500 text-sm font-medium hover:text-secondary transition-colors" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
            <span class="text-gray-400 text-sm font-medium">/</span>
            <span class="text-gray-900 text-sm font-medium">HISTORIA</span>
        </div>

        <div class="bg-white rounded-xl p-8 md:p-12 shadow-sm border border-gray-200">
            <div class="max-w-3xl mx-auto text-center mb-10">
                 <span class="material-symbols-outlined text-6xl text-primary mb-4">history_edu</span>
                <h1 class="text-primary text-4xl font-black mb-4 tracking-tight">Reseña Histórica</h1>
                <p class="text-gray-500">Un legado de tradición y esfuerzo en la provincia de Castilla.</p>
            </div>

            <div class="prose max-w-none text-gray-700 leading-relaxed space-y-6">
                <p>
                    El distrito de Choco es un pueblo con una rica tradición y cultura, ubicado en el corazón de la provincia de Castilla. Fundado en épocas coloniales, ha sabido mantener su identidad a lo largo de los años.
                </p>
                <p>
                    Desde sus inicios, la agricultura y la ganadería han sido los pilares de su economía, moldeando el carácter trabajador de su gente. Sus festividades patronales y costumbres ancestrales se han transmitido de generación en generación, convirtiéndose en un punto de referencia cultural en la región.
                </p>
                <p>
                    En las últimas décadas, Choco ha experimentado un proceso de modernización, buscando equilibrar el progreso con la conservación de su patrimonio histórico y natural, siempre con la mirada puesta en un futuro sostenible para sus habitantes.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection