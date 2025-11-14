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
          Somos una institución comprometida con el desarrollo sostenible de nuestro distrito, gestionando los recursos 
          con eficiencia y transparencia, y promoviendo la participación ciudadana para construir un futuro próspero para todos.
        </p>
      </div>
    </div>
  </section>

  {{-- TARJETAS (MISIÓN, VISIÓN, HISTORIA, ETC.) --}}
  <section class="bg-light-gray py-16 md:py-24">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        {{-- Nuestra Misión --}}
        <a href="#mision"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">rocket_launch</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Misión</h3>
          <p class="text-gray-500">Servir a la comunidad con eficiencia y transparencia.</p>
        </a>

        {{-- Nuestra Visión --}}
        <a href="#vision"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">trending_up</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Visión de Futuro</h3>
          <p class="text-gray-500">Ser un distrito modelo en desarrollo sostenible.</p>
        </a>

        {{-- Historia Municipal --}}
        <a href="#historia"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">history_edu</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestra Historia Municipal</h3>
          <p class="text-gray-500">Un legado de progreso y servicio a la comunidad.</p>
        </a>

        {{-- Organigrama --}}
        <a href="#organigrama"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">account_tree</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Organigrama Municipal</h3>
          <p class="text-gray-500">Conoce la estructura de nuestra organización.</p>
        </a>

        {{-- Valores --}}
        <a href="#valores"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">favorite</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Nuestros Valores</h3>
          <p class="text-gray-500">Principios que guían nuestro trabajo diario.</p>
        </a>

        {{-- Equipo de Gestión --}}
        <a href="#equipo"
           class="group flex flex-col items-center justify-center text-center p-8 bg-white rounded-lg shadow-md
                  transition-all duration-300 hover:shadow-xl hover:-translate-y-2 border-b-4 border-transparent
                  hover:border-accent">
          <div class="flex items-center justify-center h-20 w-20 rounded-full bg-accent/10 text-accent mb-6">
            <span class="material-symbols-outlined text-4xl">groups</span>
          </div>
          <h3 class="text-xl font-bold text-primary mb-2">Equipo de Gestión</h3>
          <p class="text-gray-500">Conoce a los líderes de nuestra municipalidad.</p>
        </a>

      </div>
    </div>
  </section>

  {{-- SECCIONES DETALLADAS (ANCLADAS) --}}
  <section id="mision" class="py-12 bg-white">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Nuestra Misión</h2>
      <p class="text-gray-700 leading-relaxed">
        Aquí puedes ampliar la misión con un texto más detallado que ya tengas definido
        en el proyecto o documentos oficiales de la municipalidad.
      </p>
    </div>
  </section>

  <section id="vision" class="py-12 bg-light-gray">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Nuestra Visión de Futuro</h2>
      <p class="text-gray-700 leading-relaxed">
        Describe la visión institucional, metas a mediano y largo plazo, y el modelo
        de distrito que se desea construir.
      </p>
    </div>
  </section>

  <section id="historia" class="py-12 bg-white">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Nuestra Historia Municipal</h2>
      <p class="text-gray-700 leading-relaxed">
        Aquí puedes colocar una reseña histórica del distrito, fechas importantes,
        creación política y momentos claves de la municipalidad.
      </p>
    </div>
  </section>

  <section id="organigrama" class="py-12 bg-light-gray">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Organigrama Municipal</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Explica brevemente la estructura organizacional. Más adelante puedes reemplazar esto
        con una imagen o un componente dinámico.
      </p>
      {{-- Ejemplo futuro --}}
      {{-- <img src="{{ asset('img/organigrama.png') }}" alt="Organigrama Municipal" class="w-full max-w-3xl mx-auto"> --}}
    </div>
  </section>

  <section id="valores" class="py-12 bg-white">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Nuestros Valores</h2>
      <p class="text-gray-700 leading-relaxed">
        Enumera los valores institucionales (transparencia, servicio, honestidad, responsabilidad, etc.)
        y cómo se aplican en la gestión municipal.
      </p>
    </div>
  </section>

  <section id="equipo" class="py-12 bg-light-gray">
    <div class="mx-auto max-w-4xl px-4 md:px-10">
      <h2 class="text-2xl font-bold text-primary mb-4">Equipo de Gestión</h2>
      <p class="text-gray-700 leading-relaxed mb-4">
        Presenta al alcalde, regidores y principales gerencias de la municipalidad.
        Más adelante puedes cambiar esto por tarjetas dinámicas con información real.
      </p>
    </div>
  </section>

@endsection
