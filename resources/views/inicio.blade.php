@extends('layouts.municipal')

@section('title', 'Municipalidad - Inicio')

@section('content')

  {{-- HERO --}}
  <section class="relative w-full">
    <picture>
      {{-- Asegúrate de que estas imágenes existan en public/img --}}
      <source media="(max-width: 640px)" srcset="{{ asset('img/hero-choco-1600x1800.jpg') }}" />
      <img
        src="{{ asset('img/hero-choco.jpg') }}"
        alt="Municipalidad de Choco"
        class="block w-full h-[42vh] sm:h-[56vh] lg:h-[70vh] object-cover"
        loading="eager" fetchpriority="high" decoding="async" sizes="100vw"
      />
    </picture>

    <div class="absolute inset-0 flex items-center justify-center px-4 text-center bg-black/20">
      {{-- Aquí podrías poner un título principal sobre la imagen si quisieras --}}
    </div>
  </section>

  {{-- NOTICIAS DESTACADAS (DINÁMICAS) --}}
  <section class="bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-primary">Noticias Destacadas</h2>
        <p class="mt-2 text-gray-600">
          Entérate de las últimas novedades y actividades en nuestro distrito.
        </p>
      </div>

      <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">

        @php
          // Imágenes de respaldo rotativas por si falta la foto
          $fallbackImages = [
              asset('img/campana-medica-choco.png'),
              asset('img/obra-choco.png'),
              asset('img/audiencia-publica-choco.png'),
          ];
        @endphp

        @if(isset($destacadas) && $destacadas->isNotEmpty())
          @foreach($destacadas as $noticia)
            @php
              $fallback = $fallbackImages[$loop->index % count($fallbackImages)];
              // Verificamos si existe la imagen guardada en storage
              $img = $noticia->imagen_portada 
                    ? asset('storage/'.$noticia->imagen_portada) 
                    : $fallback;
            @endphp

            <a href="{{ route('noticias.show', $noticia->slug) }}"
               class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2 h-full">
              
              <div class="h-56 w-full bg-cover bg-center"
                   style="background-image: url('{{ $img }}');">
              </div>

              <div class="flex flex-1 flex-col p-6">
                {{-- Fecha --}}
                <p class="text-xs font-bold text-secondary uppercase mb-2">
                  {{ $noticia->fecha_publicacion?->format('d M, Y') ?? 'Reciente' }}
                </p>

                <h3 class="text-lg font-bold text-primary line-clamp-2">
                  {{ $noticia->titulo }}
                </h3>

                @if($noticia->bajada)
                  <p class="mt-2 flex-1 text-sm text-gray-500 line-clamp-3">
                    {{ $noticia->bajada }}
                  </p>
                @endif

                <div class="mt-4 pt-4 border-t border-gray-100">
                    <span class="text-sm font-semibold text-secondary hover:underline flex items-center gap-1">
                      Leer más <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </span>
                </div>
              </div>
            </a>
          @endforeach
        @else
          {{-- CONTENIDO POR DEFECTO (Si no hay noticias en la BD aún) --}}
          
          {{-- Card 1 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg">
            <div class="h-56 w-full bg-cover bg-center"
                 style="background-image: url('{{ asset('img/campana-medica-choco.png') }}');"></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-xs font-bold text-secondary">SALUD</p>
              <h3 class="mt-2 text-lg font-bold text-primary">Gran Campaña Médica</h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Acércate a nuestros puntos de atención este fin de semana.
              </p>
            </div>
          </div>

          {{-- Card 2 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg">
            <div class="h-56 w-full bg-cover bg-center"
                 style="background-image: url('{{ asset('img/obra-choco.png') }}');"></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-xs font-bold text-secondary">OBRAS</p>
              <h3 class="mt-2 text-lg font-bold text-primary">Nuevas Obras en Marcha</h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Mejorando la infraestructura del distrito.
              </p>
            </div>
          </div>

          {{-- Card 3 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg">
            <div class="h-56 w-full bg-cover bg-center"
                 style="background-image: url('{{ asset('img/audiencia-publica-choco.png') }}');"></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-xs font-bold text-secondary">GESTIÓN</p>
              <h3 class="mt-2 text-lg font-bold text-primary">Audiencia Pública</h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Rendición de cuentas anual.
              </p>
            </div>
          </div>
        @endif
      </div>

      {{-- Botón Ver Todas --}}
      <div class="mt-12 flex justify-center">
        <a href="{{ route('noticias.index') }}"
           class="inline-flex items-center justify-center rounded-full border-2 border-primary px-8 py-3 text-sm font-bold text-primary hover:bg-primary hover:text-white transition-all">
          Ver todas las noticias
        </a>
      </div>
    </div>
  </section>

<<<<<<< HEAD
  {{-- SERVICIOS MUNICIPALES --}}
  <section class="py-16 bg-white">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="text-center mb-12">
        <h2 class="text-3xl font-bold text-primary">Servicios Municipales</h2>
        <p class="mt-2 text-gray-600">
          Trámites y servicios a un clic de distancia.
        </p>
      </div>

      <div class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-5">
        @php
          $services = [
            ['icon' => 'edit_document', 'title' => 'Mesa de Partes', 'route' => 'mesa'],
            ['icon' => 'credit_card',   'title' => 'Pagos en Línea', 'route' => '#'],
            ['icon' => 'description',   'title' => 'Licencias',      'route' => '#'],
            ['icon' => 'construction',  'title' => 'Obras',          'route' => '#'],
            ['icon' => 'local_police',  'title' => 'Seguridad',      'route' => '#'],
          ];
        @endphp

        @foreach($services as $s)
          <a href="{{ $s['route'] === '#' ? '#' : route($s['route']) }}"
             class="group flex flex-col items-center gap-4 rounded-xl border border-gray-100 bg-white p-6 text-center shadow-sm transition-all hover:border-secondary hover:shadow-md hover:-translate-y-1">
            <div class="flex h-16 w-16 items-center justify-center rounded-full bg-blue-50 text-primary transition-colors group-hover:bg-secondary group-hover:text-white">
              <span class="material-symbols-outlined text-3xl">{{ $s['icon'] }}</span>
            </div>
            <h3 class="font-bold text-gray-800 group-hover:text-primary">{{ $s['title'] }}</h3>
          </a>
        @endforeach
=======
  {{-- SERVICIOS MUNICIPALES + REDES SOCIALES --}}
  <section class="py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">

      <div class="grid gap-12 lg:grid-cols-12 items-start">

        {{-- SERVICIOS (ocupa más ancho) --}}
        <div class="lg:col-span-7">
          <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-primary">Servicios Municipales</h2>
            <p class="mt-2 text-gray-600">
              Accede a nuestros servicios en línea de forma rápida y segura.
            </p>
          </div>

          <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-2">
            @php
              $services = [
                ['icon' => 'edit_document', 'title' => 'Mesa de Partes Virtual'],
                ['icon' => 'credit_card',   'title' => 'Pagos en Línea'],
                ['icon' => 'description',   'title' => 'Licencias'],
                ['icon' => 'construction',  'title' => 'Obras'],
                ['icon' => 'local_police',  'title' => 'Seguridad'],
              ];
            @endphp

            @foreach($services as $s)
              <a href="#"
                 class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 bg-white p-6 text-center transition-all hover:border-secondary hover:shadow-xl">
                <div
                  class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
                  <span class="material-symbols-outlined text-3xl">{{ $s['icon'] }}</span>
                </div>
                <h3 class="font-bold text-primary">{{ $s['title'] }}</h3>
              </a>
            @endforeach
          </div>
        </div>

        {{-- REDES SOCIALES (más ancho a la derecha) --}}
        <aside class="lg:col-span-5">
          <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-primary">Redes Sociales</h2>
            <p class="mt-2 text-gray-600">
              Síguenos en Facebook para conocer nuestras últimas actividades y comunicados oficiales.
            </p>
          </div>

          <div class="mt-8 overflow-hidden rounded-xl bg-white shadow-lg">
            <iframe
              src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FChoco.municipalidad&tabs=timeline&width=500&height=560&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true"
              style="border:none; overflow:hidden; width:100%; height:560px;"
              scrolling="no"
              frameborder="0"
              allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
            </iframe>
          </div>
        </aside>

>>>>>>> f9b5191f9a8b385fb1f1d18e75a58a976ce12f92
      </div>
    </div>
  </section>

  {{-- TRANSPARENCIA Y CONTACTO --}}
  <section class="bg-gray-50 py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        
        {{-- Texto y Botones --}}
        <div class="text-center lg:text-left">
          <h2 class="text-3xl font-bold text-primary">Transparencia y Contacto</h2>
          <p class="mt-4 text-gray-600 text-lg">
            Accede a la información pública de la gestión municipal o preséntanos tus reclamos y sugerencias.
          </p>
          
          <div class="mt-8 flex flex-col items-center justify-center gap-4 sm:flex-row lg:justify-start">
            <a href="#"
               class="flex w-full items-center justify-center gap-2 rounded-lg h-12 px-6 bg-primary text-white font-bold shadow-lg transition-transform hover:scale-105 hover:bg-blue-900 sm:w-auto">
              <span class="material-symbols-outlined">visibility</span>
              Portal de Transparencia
            </a>
            <a href="#"
               class="flex w-full items-center justify-center gap-2 rounded-lg h-12 px-6 bg-white text-primary border-2 border-primary font-bold shadow-sm transition-transform hover:scale-105 hover:bg-gray-50 sm:w-auto">
              <span class="material-symbols-outlined">menu_book</span>
              Libro de Reclamaciones
            </a>
          </div>
        </div>

        {{-- Mapa (Corregido) --}}
        <div class="overflow-hidden rounded-xl shadow-xl border-4 border-white">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3837.998633538796!2d-72.1335!3d-15.5935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTXCsDM1JzM2LjYiUyA3MsKwMDgnMDAuNiJX!5e0!3m2!1ses!2spe!4v1630000000000!5m2!1ses!2spe" 
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

      </div>
    </div>
  </section>

@endsection