@extends('layouts.municipal')

@section('title', 'Nuestros Valores - Municipalidad')

@section('content')
<div class="bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10 space-y-10">

        {{-- Migas de pan --}}
        <nav class="flex flex-wrap items-center gap-2 text-sm mb-2">
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
                VALORES
            </span>
        </nav>

        {{-- Encabezado --}}
        <section class="text-center space-y-3">
            <h1 class="text-primary text-3xl sm:text-4xl font-black leading-tight tracking-tight">
                Nuestros Valores
            </h1>
            <p class="text-gray-600 text-sm sm:text-base">
                Los principios que guían nuestro compromiso con la comunidad.
            </p>
        </section>

        {{-- Grid de valores --}}
        <section>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                {{-- Responsabilidad --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">shield_with_heart</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Responsabilidad</h2>
                        <p class="text-gray-600 text-sm">
                            Compromiso con nuestras obligaciones y el buen uso de los recursos públicos.
                        </p>
                    </div>
                </article>

                {{-- Transparencia --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">balance</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Transparencia</h2>
                        <p class="text-gray-600 text-sm">
                            Garantizamos el acceso a la información pública y actuamos con honestidad.
                        </p>
                    </div>
                </article>

                {{-- Inclusión --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">groups</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Inclusión</h2>
                        <p class="text-gray-600 text-sm">
                            Fomentamos la diversidad y la participación activa de todos los ciudadanos.
                        </p>
                    </div>
                </article>

                {{-- Respeto --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">handshake</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Respeto</h2>
                        <p class="text-gray-600 text-sm">
                            Promovemos la dignidad y la consideración en el trato con nuestra comunidad.
                        </p>
                    </div>
                </article>

                {{-- Innovación --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">lightbulb</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Innovación</h2>
                        <p class="text-gray-600 text-sm">
                            Buscamos constantemente soluciones creativas y eficientes para el bien común.
                        </p>
                    </div>
                </article>

                {{-- Solidaridad --}}
                <article
                    class="flex flex-col items-center text-center gap-3 rounded-xl border border-gray-200 bg-white p-5 sm:p-6
                           hover:shadow-md hover:-translate-y-1 hover:border-secondary transition-all duration-200">
                    <div class="flex items-center justify-center h-12 w-12 rounded-full bg-green-50 text-secondary">
                        <span class="material-symbols-outlined">volunteer_activism</span>
                    </div>
                    <div class="space-y-1">
                        <h2 class="text-primary text-base font-bold">Solidaridad</h2>
                        <p class="text-gray-600 text-sm">
                            Fomentamos el apoyo mutuo y trabajamos juntos por el bienestar de todos.
                        </p>
                    </div>
                </article>

            </div>
        </section>

        {{-- Frase final --}}
        <section class="pb-2 pt-4">
            <h3 class="text-secondary text-xl sm:text-2xl font-bold text-center leading-snug px-2">
                Guiamos cada acción con ética y compromiso por nuestra comunidad.
            </h3>
        </section>

    </div>
</div>
@endsection
