{{-- resources/views/vision.blade.php --}}
@extends('layouts.app')

@section('title', 'Municipalidad - Nuestra Visión de Futuro')

@section('content')
  <div class="flex flex-col flex-1">
    {{-- Hero con fondo --}}
    <section class="relative">
      <div class="absolute inset-0">
        <img
          class="h-full w-full object-cover opacity-10"
          src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoW74tsJkYKmeSK2zK27CXgvuR4RyVeuVuVq4c7x0P5vWcxiT0TVnZL7YE4cdplZpDX1xVeqUeA2Q8ohFsVER2NHj5RW5DtvZLP2W9wqlY15IRFkF73W9BoLyNngHS8HlcuN5z_1Tob6ICLR3sfRgXprTxVtdznNjxcrk_J1dT5OwWb6wqlOSDua0xo4aLmg6l9doNTrNu7s48yot5SzVZNl13tXMHTGc0naiZQ-RzeapzTM5yXtuH7ksEVGOPDQYmdkB2kK63hGoW"
          alt="Proyecto emblemático del distrito"
        />
      </div>

      <div class="relative max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
        <div class="max-w-3xl mx-auto text-center">
          <h1 class="text-4xl sm:text-5xl font-black tracking-tight text-green-700">
            Nuestra Visión de Futuro
          </h1>
          <p class="mt-6 text-lg leading-8 text-gray-700">
            Ser una municipalidad moderna, inclusiva y sostenible que promueva el desarrollo integral de todos los vecinos.
          </p>
        </div>
      </div>
    </section>

    {{-- Bloques de visión --}}
    <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
      <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-3 text-center">
          <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white">
            <h3 class="text-primary text-lg font-bold">Innovación</h3>
            <p class="text-sm text-gray-600">
              Impulsando la tecnología para servicios más eficientes.
            </p>
          </div>

          <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white">
            <h3 class="text-primary text-lg font-bold">Sostenibilidad</h3>
            <p class="text-sm text-gray-600">
              Comprometidos con un futuro verde y equilibrado.
            </p>
          </div>

          <div class="flex flex-col gap-2 rounded-lg p-6 border border-gray-200 bg-white">
            <h3 class="text-primary text-lg font-bold">Cercanía Ciudadana</h3>
            <p class="text-sm text-gray-600">
              Una gestión de puertas abiertas para todos los vecinos.
            </p>
          </div>
        </div>
      </div>

      <div class="mt-12 text-center">
        <a
          href="{{ route('noticias.index') }}"
          class="inline-flex items-center justify-center rounded-lg h-12 px-8 bg-green-600 text-white text-base font-bold transition hover:bg-green-700"
        >
          Conoce nuestros proyectos
        </a>
      </div>
    </section>
  </div>
@endsection
