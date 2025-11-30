@extends('layouts.municipal')

@section('title', 'Nuestra Misión - Municipalidad')

@section('content')
<div class="bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10 space-y-10">

        {{-- Migas de Pan --}}
        <nav class="flex flex-wrap items-center gap-2 text-sm mb-2" aria-label="Breadcrumb">
            <a href="{{ route('inicio') }}"
               class="font-medium text-gray-500 hover:text-secondary transition-colors">
                INICIO
            </a>
            <span class="text-gray-400">/</span>
            <a href="{{ route('la-municipalidad') }}"
               class="font-medium text-gray-500 hover:text-secondary transition-colors">
                TU MUNICIPALIDAD
            </a>
            <span class="text-gray-400">/</span>
            <span class="font-bold text-primary">
                MISIÓN
            </span>
        </nav>

        {{-- Encabezado + Imagen --}}
        <section class="grid gap-8 md:grid-cols-2 md:items-center">
            <div class="space-y-4">
                <h1 class="text-primary text-4xl sm:text-5xl lg:text-6xl font-black leading-tight tracking-tight">
                    Nuestra Misión
                </h1>
                <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-xl">
                    Contribuir al bienestar de los vecinos a través de una gestión transparente,
                    eficiente y sostenible.
                </p>
            </div>

            <div class="w-full">
                <div class="aspect-[4/3] rounded-xl overflow-hidden shadow-md ring-1 ring-gray-200/60">
                    <div class="w-full h-full bg-center bg-cover"
                         data-alt="Un trabajador municipal ayudando a un ciudadano en una oficina luminosa y moderna."
                         style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxxYskaJMQ9Y5yMVE8mzxdTPnHHxlKDCiqjVdFUrtTxXw54H9BRdrkwXAs9huXgGyd2z1PMIH3zr2twG4OGvf89EWbIKJffvdSx5Oo8EiWCDX-11ynMuDDjH-OucseJ3HL3l6xZFZfQnCAjMXOPAmqnHuLy2SEw6a2ekwS-tY5fVUAoak39nNgfZkBVvB3uAJa_r1j48knyXZ5npnYiJU_7WN_j1dHjbKhtuffncPW04_2-14GrM3WQdEI5RP56UGOm6isTrDOYlxs");'>
                    </div>
                </div>
            </div>
        </section>

        {{-- Tarjetas de valores relacionados a la misión --}}
        <section aria-label="Valores relacionados a la misión">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Card 1 --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-center h-14 w-14 rounded-full bg-secondary/10 text-secondary">
                        <span class="material-symbols-outlined !text-4xl">
                            manage_search
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-lg font-bold">Transparencia</h2>
                        <p class="text-gray-500 text-sm">
                            Gestión clara y accesible para todos los vecinos.
                        </p>
                    </div>
                </article>

                {{-- Card 2 --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-center h-14 w-14 rounded-full bg-secondary/10 text-secondary">
                        <span class="material-symbols-outlined !text-4xl">
                            groups
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-lg font-bold">Compromiso</h2>
                        <p class="text-gray-500 text-sm">
                            Dedicados al servicio y bienestar de nuestra comunidad.
                        </p>
                    </div>
                </article>

                {{-- Card 3 --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-200">
                    <div class="flex items-center justify-center h-14 w-14 rounded-full bg-secondary/10 text-secondary">
                        <span class="material-symbols-outlined !text-4xl">
                            potted_plant
                        </span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-lg font-bold">Desarrollo Local</h2>
                        <p class="text-gray-500 text-sm">
                            Impulsando el crecimiento sostenible y la calidad de vida.
                        </p>
                    </div>
                </article>

            </div>
        </section>

    </div>
</div>
@endsection
