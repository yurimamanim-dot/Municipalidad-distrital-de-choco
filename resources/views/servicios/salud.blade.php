@extends('layouts.municipal')

@section('title', 'Salud y Campañas')

@section('content')
  <section class="bg-light-gray py-10 md:py-14">
    <div class="mx-auto max-w-4xl px-4 md:px-6 lg:px-0">

      {{-- CABECERA: Título + botón volver --}}
      <div class="flex items-center gap-3 mb-6">
        <a href="{{ route('inicio') }}"
           class="inline-flex h-9 w-9 items-center justify-center rounded-full border border-gray-200 bg-white text-gray-700 hover:bg-primary hover:text-white transition-colors">
          <span class="material-symbols-outlined text-xl">arrow_back</span>
        </a>
        <h1 class="text-2xl md:text-3xl font-extrabold text-primary">
          Salud y Campañas
        </h1>
      </div>

      <p class="text-sm md:text-base text-gray-600 mb-8">
        Aquí encontrarás las principales campañas de salud, jornadas de vacunación
        y acciones de prevención que realiza la Municipalidad Distrital de Choco
        junto a los establecimientos de salud del distrito.
      </p>

      {{-- CONTENEDOR PRINCIPAL --}}
      <div class="bg-white rounded-2xl shadow-sm p-4 md:p-6">
        <h2 class="text-lg md:text-xl font-bold text-primary mb-4 md:mb-6">
          Últimas Publicaciones
        </h2>

        <div class="space-y-4 md:space-y-5">

          {{-- CARD 1 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="https://msi.gob.pe/portal/wp-content/uploads/2016/05/Vacunacion2016.jpg"
                alt="Jornada de Vacunación contra la Influenza"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-secondary uppercase mb-1">
                Vacunación
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                Jornada de Vacunación contra la Influenza
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Protege a tu familia. Acércate al centro de salud del 15 al 20 de mayo
                para recibir la vacuna contra la influenza.
              </p>
            </div>
          </article>

          {{-- CARD 2 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="/img/salud-dengue.jpg"
                alt="Campaña de prevención del dengue"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-rose-500 uppercase mb-1">
                Prevención Dengue
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                ¡Todos contra el Dengue! Elimina criaderos
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Revisa tu patio y elimina cualquier recipiente que pueda acumular
                agua. La prevención es tarea de todos para evitar el dengue.
              </p>
            </div>
          </article>

          {{-- CARD 3 --}}
          <article class="overflow-hidden rounded-xl border border-gray-200 bg-white shadow-sm flex flex-col md:flex-row">
            <div class="md:w-1/3">
              <img
                src="/img/salud-limpieza.jpg"
                alt="Campaña de limpieza comunitaria"
                class="h-44 md:h-full w-full object-cover">
            </div>
            <div class="flex-1 p-4 md:p-5">
              <p class="text-xs font-semibold tracking-wide text-emerald-500 uppercase mb-1">
                Limpieza
              </p>
              <h3 class="text-base md:text-lg font-semibold text-gray-900">
                Campaña de Limpieza Comunitaria
              </h3>
              <p class="mt-2 text-sm text-gray-600">
                Únete este sábado a la jornada de limpieza en el barrio El Centro.
                ¡Juntos por un Choco más ordenado y saludable!
              </p>
            </div>
          </article>

        </div>
      </div>
    </div>
  </section>
@endsection
