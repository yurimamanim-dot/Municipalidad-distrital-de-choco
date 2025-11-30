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

  {{-- NOTICIAS DESTACADAS (DINÁMICAS) --}}
  <section class="bg-light-gray py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">
      <div class="text-center">
        <h2 class="text-3xl font-bold text-primary">Noticias Destacadas</h2>
        <p class="mt-2 text-gray-600">
          Entérate de las últimas novedades y actividades en nuestro distrito.
        </p>
      </div>

      <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @php
          // Imágenes de respaldo para cuando la noticia no tenga portada
          $fallbackImages = [
              '/img/campana-medica-choco.png',
              '/img/obra-choco.png',
              '/img/audiencia-publica-choco.png',
          ];
        @endphp

        @if($destacadas->isNotEmpty())
          @foreach($destacadas as $noticia)
            @php
              $fallback = $fallbackImages[$loop->index % count($fallbackImages)];
              $img = $noticia->imagen_portada
                    ? asset('storage/'.$noticia->imagen_portada)
                    : $fallback;
            @endphp

            <a href="{{ route('noticias.show', $noticia->slug) }}"
               class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
              <div class="h-56 w-full bg-cover bg-center"
                   style="background-image: url('{{ $img }}');"></div>

              <div class="flex flex-1 flex-col p-6">
                @if($noticia->categoria)
                  <p class="text-sm font-semibold text-secondary uppercase">
                    {{ $noticia->categoria }}
                  </p>
                @endif

                <h3 class="mt-2 text-lg font-bold text-primary">
                  {{ $noticia->titulo }}
                </h3>

                @if($noticia->bajada)
                  <p class="mt-2 flex-1 text-sm text-gray-500">
                    {{ $noticia->bajada }}
                  </p>
                @endif

                <p class="mt-2 text-xs text-gray-400">
                  {{ $noticia->fecha_publicacion_formateada }}
                </p>

                <span class="mt-4 text-sm font-semibold text-secondary hover:underline">
                  Leer más
                </span>
              </div>
            </a>
          @endforeach
        @else
          {{-- Si no hay noticias destacadas, mostramos tus 3 tarjetas originales --}}

          {{-- Card 1 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
            <div class="h-56 w-full bg-cover bg-center"
                 style='background-image: url("/img/campana-medica-choco.png");'></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-sm font-semibold text-secondary">SALUD</p>
              <h3 class="mt-2 text-lg font-bold text-primary">Gran Campaña Medica</h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Protege tu salud y la de los tuyos. Acércate a nuestros puntos de atención este fin de semana.
              </p>
              <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">
                Leer más
              </a>
            </div>
          </div>

          {{-- Card 2 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
            <div class="h-56 w-full bg-cover bg-center"
                 style='background-image: url("/img/obra-choco.png");'></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-sm font-semibold text-secondary">OBRAS</p>
              <h3 class="mt-2 text-lg font-bold text-primary">
                Modernización del Distrito: Nuevas Obras en Marcha
              </h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Seguimos trabajando para mejorar la calidad de vida en nuestro distrito con nueva infraestructura.
              </p>
              <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">
                Leer más
              </a>
            </div>
          </div>

          {{-- Card 3 --}}
          <div class="flex flex-col overflow-hidden rounded-lg bg-white shadow-lg transition-transform hover:-translate-y-2">
            <div class="h-56 w-full bg-cover bg-center"
                 style='background-image: url("/img/audiencia-publica-choco.png");'></div>
            <div class="flex flex-1 flex-col p-6">
              <p class="text-sm font-semibold text-secondary">CULTURA</p>
              <h3 class="mt-2 text-lg font-bold text-primary">
                Audiencia publica: ¡No te la pierdas!
              </h3>
              <p class="mt-2 flex-1 text-sm text-gray-500">
                Rendicion de cuentas distrital.
              </p>
              <a class="mt-4 text-sm font-semibold text-secondary hover:underline" href="#">
                Leer más
              </a>
            </div>
          </div>
        @endif
      </div>

      {{-- Botón para ir al listado completo de noticias --}}
      <div class="mt-10 flex justify-center">
        <a href="{{ route('noticias.index') }}"
           class="inline-flex items-center justify-center rounded-full border border-primary px-6 py-3 text-sm font-semibold text-primary hover:bg-primary hover:text-white transition-colors">
          Ver todas las noticias
        </a>
      </div>
    </div>
  </section>

  {{-- SERVICIOS MUNICIPALES + REDES SOCIALES --}}
  <section class="py-16">
    <div class="mx-auto max-w-7xl px-4 md:px-10">

      <div class="grid gap-12 lg:grid-cols-12 items-start">

        {{-- SERVICIOS (columna izquierda) --}}
        <div class="lg:col-span-7">
          <div class="text-center lg:text-left">
            <h2 class="text-3xl font-bold text-primary">Servicios Municipales</h2>
            <p class="mt-2 text-gray-600">
              Accede a nuestros servicios en línea de forma rápida y segura.
            </p>
          </div>

          <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-2">

            {{-- PROGRAMAS (ruta correcta) --}}
            <a href="{{ route('programas.sociales') }}"
               class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 bg-white p-6 text-center transition-all hover:border-secondary hover:shadow-xl">
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
                <span class="material-symbols-outlined text-3xl">edit_document</span>
              </div>
              <h3 class="font-bold text-primary">Programas</h3>       
              <p class="text-sm text-gray-600">
                Apoyo a familias, adultos mayores y población en situación de vulnerabilidad.
              </p>

            </a>

            {{-- SALUD Y CAMPAÑAS --}}
            <a href="#"
               class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 bg-white p-6 text-center transition-all hover:border-secondary hover:shadow-xl">
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
                <span class="material-symbols-outlined text-3xl">vaccines</span>
              </div>
              <h3 class="font-bold text-primary">Salud y campañas</h3>
              <p class="text-sm text-gray-600">
                Jornadas médicas, vacunación y acciones de prevención para el distrito.
              </p>
            </a>

            {{-- EDUCACIÓN Y CULTURA --}}
            <a href="#"
               class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 bg-white p-6 text-center transition-all hover:border-secondary hover:shadow-xl">
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
                <span class="material-symbols-outlined text-3xl">menu_book</span>
              </div>
              <h3 class="font-bold text-primary">Educación y cultura</h3>
              <p class="text-sm text-gray-600">
                Talleres, actividades culturales y apoyo a estudiantes del distrito.
              </p>
            </a>

            {{-- LICENCIAS Y TRÁMITES --}}
            <a href="#"
               class="group flex flex-col items-center gap-4 rounded-lg border border-gray-200 bg-white p-6 text-center transition-all hover:border-secondary hover:shadow-xl">
              <div
                class="flex h-16 w-16 items-center justify-center rounded-full bg-secondary/10 text-secondary transition-colors group-hover:bg-secondary group-hover:text-white">
                <span class="material-symbols-outlined text-3xl">description</span>
              </div>
              <h3 class="font-bold text-primary">Licencias y trámites</h3>
              <p class="text-sm text-gray-600">
                Información y atención para licencias, permisos y otros trámites.
              </p>
            </a>

          </div>
        </div>

        {{-- REDES SOCIALES (columna derecha) --}}
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
            <a href="#"
               class="flex w-full items-center justify-center rounded-lg h-12 px-6 bg-primary text-white font-bold transition-transform hover:scale-105 sm:w-auto">
              <span class="material-symbols-outlined mr-2">visibility</span>
              <span>Portal de Transparencia</span>
            </a>
            <a href="#"
               class="flex w-full items-center justify-center rounded-lg h-12 px-6 bg-white text-primary border border-primary font-bold transition-transform hover:scale-105 sm:w-auto">
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
