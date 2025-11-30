@extends('layouts.municipal')

@section('title', 'Nuestra Visión de Futuro - Municipalidad')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden bg-white">
    
    {{-- Migas de Pan --}}
    <div class="w-full bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex flex-wrap gap-2 text-sm">
                <a class="text-gray-500 font-medium hover:text-secondary transition-colors"
                   href="{{ route('inicio') }}">
                    INICIO
                </a>
                <span class="text-gray-400 font-medium">/</span>
                <a class="text-gray-500 font-medium hover:text-secondary transition-colors"
                   href="{{ route('la-municipalidad') }}">
                    TU MUNICIPALIDAD
                </a>
                <span class="text-gray-400 font-medium">/</span>
                <span class="text-primary font-bold">
                    VISIÓN
                </span>
            </div>
        </div>
    </div>

    <main class="flex-grow">
        {{-- Hero sencillo --}}
        <section class="relative bg-white overflow-hidden">
            <div class="absolute inset-0">
                <img
                    class="h-full w-full object-cover opacity-10"
                    alt="Imagen de un proyecto emblemático del distrito con arquitectura moderna y áreas verdes."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoW74tsJkYKmeSK2zK27CXgvuR4RyVeuVuVq4c7x0P5vWcxiT0TVnZL7YE4cdplZpDX1xVeqUeA2Q8ohFsVER2NHj5RW5DtvZLP2W9wqlY15IRFkF73W9BoLyNngHS8HlcuN5z_1Tob6ICLR3sfRgXprTxVtdznNjxcrk_J1dT5OwWb6wqlOSDua0xo4aLmg6l9doNTrNu7s48yot5SzVZNl13tXMHTGc0naiZQ-RzeapzTM5yXtuH7ksEVGOPDQYmdkB2kK63hGoW"
                />
            </div>

            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20">
                <div class="max-w-3xl mx-auto text-center space-y-4">
                    <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-primary">
                        Nuestra Visión de Futuro
                    </h1>
                    <p class="mt-2 text-base sm:text-lg leading-relaxed text-gray-600">
                        Ser una municipalidad moderna, inclusiva y sostenible que promueva el desarrollo integral
                        de todos los vecinos.
                    </p>
                </div>
            </div>
        </section>

        {{-- Bloques de visión --}}
        <section class="bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
                <div class="max-w-4xl mx-auto grid grid-cols-1 gap-6 sm:grid-cols-3 text-center">

                    {{-- Innovación --}}
                    <article
                        class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white shadow-sm
                               hover:shadow-md hover:-translate-y-1 hover:border-secondary
                               transition-all duration-200">
                        <h3 class="text-secondary text-lg font-bold leading-normal">
                            Innovación
                        </h3>
                        <p class="text-sm text-gray-600">
                            Impulsando la tecnología para servicios más eficientes.
                        </p>
                    </article>

                    {{-- Sostenibilidad --}}
                    <article
                        class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white shadow-sm
                               hover:shadow-md hover:-translate-y-1 hover:border-secondary
                               transition-all duration-200">
                        <h3 class="text-secondary text-lg font-bold leading-normal">
                            Sostenibilidad
                        </h3>
                        <p class="text-sm text-gray-600">
                            Comprometidos con un futuro verde y equilibrado.
                        </p>
                    </article>

                    {{-- Cercanía ciudadana --}}
                    <article
                        class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white shadow-sm
                               hover:shadow-md hover:-translate-y-1 hover:border-secondary
                               transition-all duration-200">
                        <h3 class="text-primary text-lg font-bold leading-normal">
                            Cercanía ciudadana
                        </h3>
                        <p class="text-sm text-gray-600">
                            Una gestión de puertas abiertas para todos los vecinos.
                        </p>
                    </article>

                </div>

                <div class="mt-12 text-center">
                    <button
                        class="group inline-flex items-center justify-center rounded-lg h-11 px-8
                               bg-secondary text-white text-sm sm:text-base font-semibold
                               shadow-sm hover:shadow-md transition-all duration-200">
                        <span class="group-hover:-translate-y-0.5 transition-transform">
                            Conoce nuestros proyectos
                        </span>
                    </button>
                </div>
            </div>
        </section>
    </main>
</div>
@endsection
