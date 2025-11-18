@extends('layouts.app')

@section('title','Municipalidad - La Municipalidad')

@section('content')

  {{-- HERO / CABECERA --}}
  <section class="bg-primary text-white">
    <div class="mx-auto max-w-7xl px-4 py-12 md:px-10 md:py-16 text-center">
      <h1 class="text-4xl font-bold md:text-5xl">
        La Municipalidad de Choco
      </h1>
    </div>
  </section>

  {{-- DESCRIPCIÓN PRINCIPAL --}}
  <section class="py-16 md:py-24 bg-white">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-bold text-primary">
          Conoce Nuestra Institución
        </h2>
        <p class="mt-4 text-lg text-gray-600">
          Somos una institución comprometida con el desarrollo sostenible de nuestro distrito,
          gestionando los recursos con eficiencia y transparencia, y promoviendo la participación
          ciudadana para construir un futuro próspero para todos.
        </p>
      </div>
    </div>
  </section>

  {{-- TARJETAS (LINK A OTRAS PÁGINAS) --}}
  <section class="bg-light-gray py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Nuestra Misión --}}
        <a href="{{ route('mision') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">rocket_launch</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Misión</h3>
          <p class="text-gray-500">Servir a la comunidad con eficiencia y transparencia.</p>
        </a>

        {{-- Nuestra Visión --}}
        <a href="{{ route('vision') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">trending_up</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Visión de Futuro</h3>
          <p class="text-gray-500">Ser un distrito modelo en desarrollo sostenible.</p>
        </a>

        {{-- Historia Municipal --}}
        <a href="{{ route('historia') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">history_edu</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Historia Municipal</h3>
          <p class="text-gray-500">Un legado de progreso y servicio a la comunidad.</p>
        </a>

        {{-- Organigrama --}}
        <a href="{{ route('organigrama') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">account_tree</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Organigrama Municipal</h3>
          <p class="text-gray-500">Conoce la estructura de nuestra organización.</p>
        </a>

        {{-- Valores --}}
        <a href="{{ route('valores') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">favorite</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestros Valores</h3>
          <p class="text-gray-500">Principios que guían nuestro trabajo diario.</p>
        </a>

        {{-- Equipo de Gestión --}}
        <a href="{{ route('equipo-gestion') }}"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-secondary">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-secondary/10 text-secondary mb-6">
            <span class="material-symbols-outlined text-4xl">groups</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Equipo de Gestión</h3>
          <p class="text-gray-500">Conoce a los líderes de nuestra municipalidad.</p>
        </a>

      </div>
    </div>
  </section>

@endsection
