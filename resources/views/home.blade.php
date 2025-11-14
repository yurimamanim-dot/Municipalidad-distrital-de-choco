@extends('layouts.municipal')
@section('title','Municipalidad - Inicio')

@section('content')

  {{-- HERO --}}
  <section class="relative w-full">
    <picture>
      <source media="(max-width: 640px)" srcset="/img/hero-choco-1600x1800.jpg" />
      <img
        src="/img/hero-choco.jpg"
        alt="Municipalidad de Choco"
        class="block w-full h-[42vh] sm:h-[56vh] lg:h-[70vh] object-cover"
        loading="eager" fetchpriority="high" decoding="async" sizes="100vw"
      />
    </picture>

    <div class="absolute inset-0 flex items-center justify-center px-4 text-center">
      {{-- títulos/botón opcionales --}}
    </div>
  </section>

  {{-- NOTICIAS DESTACADAS --}}
  <section class="bg-light-gray py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-primary">Noticias Destacadas</h2>
        <p class="mt-2 text-gray-600">Entérate de las últimas novedades y actividades en nuestro distrito.</p>
      </div>

      <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        {{-- Card 1 --}}
        <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
          <div class="h-56 w-full bg-cover bg-center" style='background-image: url("/img/campana-medica-choco.png");'></div>
          <div class="flex flex-1 flex-col p-6">
            <p class="text-sm font-semibold text-secondary">SALUD</p>
            <h3 class="mt-2 text-lg font-bold text-primary">Gran Campaña Medica</h3>
            <p class="mt-2 flex-1 text-sm text-gray-500">Protege tu salud y la de los tuyos. Acércate a nuestros puntos de atención este fin de semana.</p>
            <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">Leer más</a>
          </div>
        </div>

        {{-- Card 2 --}}
        <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
          <div class="h-56 w-full bg-cover bg-center" style='background-image: url("/img/obra-choco.png");'></div>
          <div class="flex flex-1 flex-col p-6">
            <p class="text-sm font-semibold text-secondary">OBRAS</p>
            <h3 class="mt-2 text-lg font-bold text-primary">Modernización del Distrito: Nuevas Obras en Marcha</h3>
            <p class="mt-2 flex-1 text-sm text-gray-500">Seguimos trabajando para mejorar la calidad de vida en nuestro distrito con nueva infraestructura.</p>
            <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">Leer más</a>
          </div>
        </div>

        {{-- Card 3 --}}
        <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
          <div class="h-56 w-full bg-cover bg-center" style='background-image: url("/img/audiencia-publica-choco.png");'></div>
          <div class="flex flex-1 flex-col p-6">
            <p class="text-sm font-semibold text-secondary">CULTURA</p>
            <h3 class="mt-2 text-lg font-bold text-primary">Audiencia publica: ¡No te la pierdas!</h3>
            <p class="mt-2 flex-1 text-sm text-gray-500">Rendicion de cuentas distrital.</p>
            <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- SERVICIOS MUNICIPALES --}}
  <section class="py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-primary">Servicios Municipales</h2>
        <p class="mt-2 text-gray-600">Accede a nuestros servicios en línea de forma rápida y segura.</p>
      </div>

      <div class="mt-12 grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-5">
        @php
          $services = [
            ['icon' => 'edit_document', 'title' => 'Mesa de Partes Virtual'],
            ['icon' => 'credit_card', 'title' => 'Pagos en Línea'],
            ['icon' => 'description', 'title' => 'Licencias'],
            ['icon' => 'construction', 'title' => 'Obras'],
            ['icon' => 'local_police', 'title' => 'Seguridad'],
          ];
        @endphp
        @foreach($services as $s)
          <a class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 p-6 text-center transition-all hover:border-secondary hover:shadow-xl {{ $loop->last ? 'col-span-2 md:col-span-1' : '' }}" href="#">
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
              <span class="material-symbols-outlined text-3xl">{{ $s['icon'] }}</span>
            </div>
            <h3 class="font-bold text-primary">{{ $s['title'] }}</h3>
          </a>
        @endforeach
      </div>
    </div>
  </section>

  {{-- TRANSPARENCIA Y CONTACTO --}}
  <section class="bg-light-gray py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <div class="text-center lg:text-left">
          <h2 class="text-3xl font-bold text-primary">Transparencia y Contacto Ciudadano</h2>
          <p class="mt-4 text-gray-600">
          Estamos comprometidos con la transparencia y la participación ciudadana.
          Accede a la información pública, presenta tus reclamos o contáctanos.
          </p>
          <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row lg:justify-start">
            <a href="#" class="flex w-full items-center justify-center rounded-lg h-12 px-6 bg-primary text-white font-bold transition-transform hover:scale-105 sm:w-auto">
              <span class="material-symbols-outlined mr-2">visibility</span>
              <span>Portal de Transparencia</span>
            </a>
            <a href="#" class="flex w-full items-center justify-center rounded-lg h-12 px-6 bg-white text-primary border border-primary font-bold transition-transform hover:scale-105 sm:w-auto">
              <span class="material-symbols-outlined mr-2">menu_book</span>
              <span>Libro de Reclamaciones</span>
            </a>
          </div>
        </div>

        <div class="overflow-hidden rounded-lg shadow-lg">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1380.7825636489063!2d-72.1279871005942!3d-15.576625988287102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916a1beffb314545%3A0xcbe3f3478bf840fe!2sMunicipalidad%20Distrital%20de%20Choco!5e0!3m2!1ses!2spe!4v1762234479238!5m2!1ses!2spe"
            width="100%" height="350" style="border:0;"
            loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen>
          </iframe>
        </div>
      </div>
    </div>
  </section>

@endsection
