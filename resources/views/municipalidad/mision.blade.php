@extends('layouts.municipal')

@section('title', 'Nuestra Visión de Futuro - Municipalidad')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden bg-white">
    
    {{-- Migas de Pan (Agregado para consistencia con el resto del sitio) --}}
    <div class="w-full bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 font-medium hover:text-secondary transition-colors" href="{{ route('inicio') }}">INICIO</a>
                <span class="text-gray-400 font-medium">/</span>
                <a class="text-gray-500 font-medium hover:text-secondary transition-colors" href="{{ route('la-municipalidad') }}">TU MUNICIPALIDAD</a>
                <span class="text-gray-400 font-medium">/</span>
                <span class="text-primary font-bold">VISIÓN</span>
            </div>
        </div>
    </div>

    <main class="flex-grow">
        <!-- HeroSection -->
        <section class="relative bg-white overflow-hidden">
            <div class="absolute inset-0">
                <img class="h-full w-full object-cover opacity-10" 
                     alt="Imagen de un proyecto emblemático del distrito con arquitectura moderna y áreas verdes." 
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoW74tsJkYKmeSK2zK27CXgvuR4RyVeuVuVq4c7x0P5vWcxiT0TVnZL7YE4cdplZpDX1xVeqUeA2Q8ohFsVER2NHj5RW5DtvZLP2W9wqlY15IRFkF73W9BoLyNngHS8HlcuN5z_1Tob6ICLR3sfRgXprTxVtdznNjxcrk_J1dT5OwWb6wqlOSDua0xo4aLmg6l9doNTrNu7s48yot5SzVZNl13tXMHTGc0naiZQ-RzeapzTM5yXtuH7ksEVGOPDQYmdkB2kK63hGoW"/>
            </div>
            
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 sm:py-32">
                <div class="max-w-3xl mx-auto text-center">
                    <h1 class="text-4xl font-black tracking-tight text-primary sm:text-6xl">
                        Nuestra Visión de Futuro
                    </h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">
                        Ser una municipalidad moderna, inclusiva y sostenible que promueva el desarrollo integral de todos los vecinos.
                    </p>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24 sm:pb-32">
            <div class="max-w-4xl mx-auto">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 text-center">
                    
                    <!-- Innovación -->
                    <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white hover:shadow-lg transition-shadow">
                        <h3 class="text-secondary text-lg font-bold leading-normal">Innovación</h3>
                        <p class="text-sm text-gray-600">Impulsando la tecnología para servicios más eficientes.</p>
                    </div>

                    <!-- Sostenibilidad -->
                    <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white hover:shadow-lg transition-shadow">
                        <h3 class="text-secondary text-lg font-bold leading-normal">Sostenibilidad</h3>
                        <p class="text-sm text-gray-600">Comprometidos con un futuro verde y equilibrado.</p>
                    </div>

                    <!-- Cercanía -->
                    <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white hover:shadow-lg transition-shadow">
                        <h3 class="text-primary text-lg font-bold leading-normal">Cercanía Ciudadana</h3>
                        <p class="text-sm text-gray-600">Una gestión de puertas abiertas para todos los vecinos.</p>
                    </div>

                </div>
            </div>

            <div class="mt-16 text-center">
                <button class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg h-12 px-8 bg-secondary text-white text-base font-bold transition-all duration-300 ease-in-out hover:bg-green-700 shadow-md hover:shadow-xl">
                    <span class="absolute inset-0 w-0 bg-primary transition-all duration-300 ease-out group-hover:w-full"></span>
                    <span class="relative group-hover:text-white">Conoce nuestros proyectos</span>
                </button>
            </div>
        </section>
    </main>
</div>
@endsection