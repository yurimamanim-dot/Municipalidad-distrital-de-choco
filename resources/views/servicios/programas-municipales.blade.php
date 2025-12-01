@extends('layouts.municipal')

@section('title', 'Programas')

@section('content')

  {{-- HERO PROGRAMAS --}}
  <section class="relative w-full bg-primary/5">
    <div class="mx-auto max-w-6xl px-4 md:px-8 py-10 md:py-14">
      <div class="grid gap-8 md:grid-cols-[minmax(0,1.4fr)_minmax(0,1fr)] items-center">
        <div>
          <h1 class="text-3xl md:text-4xl font-extrabold text-primary tracking-tight">
            Programas Municipales
          </h1>
          <p class="mt-4 text-base md:text-lg text-gray-700">
            Conoce los programas que impulsa la Municipalidad Distrital de Choco
            para apoyar a las familias, estudiantes, agricultores y población en
            situación de vulnerabilidad.
          </p>
          <p class="mt-2 text-sm text-gray-500">
            Para más información puedes acercarte a la municipalidad o escribir
            a nuestros canales oficiales.
          </p>
        </div>

        <div class="hidden md:block">
          <div class="rounded-2xl overflow-hidden shadow-lg h-52 bg-center bg-cover"
               style='background-image:url("/img/hero-programas-choco.jpg");'>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- LISTADO DE PROGRAMAS --}}
  <section class="py-12 md:py-16 bg-white">
    <div class="mx-auto max-w-5xl px-4 md:px-8 space-y-6">

      {{-- Programa 1 --}}
      <article class="flex gap-4 rounded-2xl border border-gray-200 bg-gray-50 p-5 md:p-6 items-start">
        <div
          class="mt-1 flex h-11 w-11 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
          <span class="material-symbols-outlined text-2xl">diversity_3</span>
        </div>
        <div class="flex-1">
          <h2 class="text-lg md:text-xl font-semibold text-primary">
            Programas para familias y población vulnerable
          </h2>
          <p class="mt-1 text-sm text-gray-700">
            Acompañamiento a familias de bajos recursos, apoyo en momentos de
            emergencia y articulación con instituciones aliadas para la entrega
            de ayuda humanitaria.
          </p>
        </div>
      </article>

      {{-- Programa 2 --}}
      <article class="flex gap-4 rounded-2xl border border-gray-200 bg-gray-50 p-5 md:p-6 items-start">
        <div
          class="mt-1 flex h-11 w-11 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
          <span class="material-symbols-outlined text-2xl">vaccines</span>
        </div>
        <div class="flex-1">
          <h2 class="text-lg md:text-xl font-semibold text-primary">
            Salud y campañas preventivas
          </h2>
          <p class="mt-1 text-sm text-gray-700">
            Jornadas médicas, campañas de vacunación y acciones de prevención
            para cuidar la salud de niños, jóvenes, adultos mayores y personas
            con discapacidad.
          </p>
        </div>
      </article>

      {{-- Programa 3 --}}
      <article class="flex gap-4 rounded-2xl border border-gray-200 bg-gray-50 p-5 md:p-6 items-start">
        <div
          class="mt-1 flex h-11 w-11 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
          <span class="material-symbols-outlined text-2xl">agriculture</span>
        </div>
        <div class="flex-1">
          <h2 class="text-lg md:text-xl font-semibold text-primary">
            Apoyo al agricultor y desarrollo productivo
          </h2>
          <p class="mt-1 text-sm text-gray-700">
            Coordinación de capacitaciones, asistencia técnica y apoyo en la
            comercialización de productos de los agricultores del distrito.
          </p>
        </div>
      </article>

      {{-- Programa 4 --}}
      <article class="flex gap-4 rounded-2xl border border-gray-200 bg-gray-50 p-5 md:p-6 items-start">
        <div
          class="mt-1 flex h-11 w-11 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
          <span class="material-symbols-outlined text-2xl">school</span>
        </div>
        <div class="flex-1">
          <h2 class="text-lg md:text-xl font-semibold text-primary">
            Educación y cultura para niños y jóvenes
          </h2>
          <p class="mt-1 text-sm text-gray-700">
            Actividades culturales, refuerzo escolar, talleres artísticos y
            espacios de integración para fortalecer la identidad y los valores
            de nuestra juventud.
          </p>
        </div>
      </article>

      {{-- Programa 5 --}}
      <article class="flex gap-4 rounded-2xl border border-gray-200 bg-gray-50 p-5 md:p-6 items-start">
        <div
          class="mt-1 flex h-11 w-11 items-center justify-center rounded-xl bg-secondary/10 text-secondary">
          <span class="material-symbols-outlined text-2xl">elderly</span>
        </div>
        <div class="flex-1">
          <h2 class="text-lg md:text-xl font-semibold text-primary">
            Atención al adulto mayor
          </h2>
          <p class="mt-1 text-sm text-gray-700">
            Espacios de encuentro, actividades recreativas y acompañamiento
            para que nuestros adultos mayores se mantengan activos y cuidados.
          </p>
        </div>
      </article>

      {{-- Nota final --}}
      <p class="pt-4 text-xs md:text-sm text-gray-500">
        La información de cada programa puede actualizarse según la
        programación de la Municipalidad Distrital de Choco. Para conocer los
        calendarios y convocatorias vigentes, revisa nuestras
        <a href="https://www.facebook.com/Choco.municipalidad"
           target="_blank" rel="noopener"
           class="text-secondary font-semibold hover:underline">
          redes sociales oficiales
        </a>.
      </p>
    </div>
  </section>

@endsection
