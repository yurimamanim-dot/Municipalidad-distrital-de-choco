@extends('layouts.municipal')

@section('title', 'Educación y Cultura')

@section('content')
<section class="bg-gray-50 py-8 sm:py-12">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">

        {{-- Barra superior: volver + título --}}
        <div class="flex items-center gap-3 mb-6">
            <a href="{{ route('inicio') }}"
               class="flex items-center justify-center rounded-full border border-gray-200 bg-white p-2 text-gray-600 hover:bg-gray-100 hover:text-primary transition">
                <span class="material-symbols-outlined text-xl">arrow_back</span>
            </a>
            <h1 class="text-xl sm:text-2xl font-bold text-gray-900">
                Educación y Cultura
            </h1>
        </div>

        <p class="text-sm sm:text-base text-gray-600 mb-6 sm:mb-8">
            Conoce las actividades educativas y culturales que la Municipalidad Distrital de Choco
            impulsa para fortalecer el aprendizaje, la lectura y nuestras tradiciones.
        </p>

        {{-- Sección: Eventos Educativos --}}
        <section class="mb-8 sm:mb-10">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-900 mb-4">
                Eventos Educativos
            </h2>

            <article
                class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm flex flex-col sm:flex-row">
                {{-- Imagen --}}
                <div class="sm:w-2/5">
                    <img
                        src="https://www.revistaotlet.com/wp-content/uploads/nina_computadora_biblioteca.jpg"
                        alt="Círculo de Lectura Juvenil"
                        class="h-48 w-full object-cover sm:h-full">
                </div>

                {{-- Contenido --}}
                <div class="flex-1 p-5 sm:p-6 flex flex-col gap-2">
                    <p class="text-xs font-semibold tracking-wide text-secondary uppercase">
                        Evento Educativo
                    </p>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900">
                        Círculo de Lectura Juvenil
                    </h3>
                    <p class="text-sm text-gray-600">
                        Fomenta el amor por la lectura en los jóvenes de nuestra comunidad. Un espacio
                        para discutir libros y expandir horizontes.
                    </p>

                    <div class="mt-3 flex flex-col gap-2 text-xs sm:text-sm text-gray-500">
                        <div class="inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">event</span>
                            <span>Viernes 31 de octubre, 4:00 p.m.</span>
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">location_on</span>
                            <span>Biblioteca Municipal de Choco</span>
                        </div>
                    </div>
                </div>
            </article>
        </section>

        {{-- Sección: Talleres Culturales --}}
        <section class="mb-8 sm:mb-10">
            <h2 class="text-lg sm:text-xl font-semibold text-gray-900 mb-4">
                Talleres Culturales
            </h2>

            <article
                class="overflow-hidden rounded-2xl border border-gray-100 bg-white shadow-sm flex flex-col sm:flex-row">
                {{-- Imagen --}}
                <div class="sm:w-2/5">
                    <img
                        src="https://imgmedia.larepublica.pe/1200x735/larepublica/original/2022/04/29/626c5590fa537a2d2103a276.jpg"
                        alt="Taller de Danza Folclórica"
                        class="h-48 w-full object-cover sm:h-full">
                </div>

                {{-- Contenido --}}
                <div class="flex-1 p-5 sm:p-6 flex flex-col gap-2">
                    <p class="text-xs font-semibold tracking-wide text-secondary uppercase">
                        Taller Cultural
                    </p>
                    <h3 class="text-base sm:text-lg font-bold text-gray-900">
                        Taller de Danza Folclórica
                    </h3>
                    <p class="text-sm text-gray-600">
                        Aprende los pasos y la historia de nuestras danzas tradicionales.
                        Taller abierto para todas las edades.
                    </p>

                    <div class="mt-3 flex flex-col gap-2 text-xs sm:text-sm text-gray-500">
                        <div class="inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">event</span>
                            <span>Sábado 25 de octubre, 10:00 a.m.</span>
                        </div>
                        <div class="inline-flex items-center gap-2">
                            <span class="material-symbols-outlined text-base text-secondary">location_on</span>
                            <span>Centro Cultural Municipal</span>
                        </div>
                    </div>
                </div>
            </article>
        </section>

</section>
@endsection
