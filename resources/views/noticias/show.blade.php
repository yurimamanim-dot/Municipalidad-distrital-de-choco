@extends('layouts.municipal')

@section('title', $noticia->titulo)

@section('content')
<section class="font-display bg-background-light dark:bg-background-dark text-[#1A1A1A] dark:text-gray-200 py-8">
  <div class="container mx-auto px-4 md:px-8 lg:px-16 xl:px-24">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
      {{-- CONTENIDO PRINCIPAL --}}
      <article class="lg:col-span-2">

        {{-- Breadcrumbs --}}
        <div class="flex flex-wrap gap-2 mb-4">
          <a href="{{ url('/') }}"
             class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary dark:hover:text-white">
            Inicio
          </a>
          <span class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">/</span>
          <a href="{{ route('noticias.index') }}"
             class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal hover:text-primary dark:hover:text-white">
            Noticias
          </a>
          <span class="text-gray-500 dark:text-gray-400 text-sm font-medium leading-normal">/</span>
          <span class="text-text-body dark:text-gray-200 text-sm font-medium leading-normal truncate max-w-xs">
            {{ $noticia->titulo }}
          </span>
        </div>

        {{-- Título --}}
        <div class="mb-2">
          <h1 class="text-primary dark:text-blue-200 text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">
            {{ $noticia->titulo }}
          </h1>
        </div>

        {{-- Meta --}}
        <p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal mb-6">
          Publicado el {{ $noticia->fecha_publicacion_formateada }}
          @if($noticia->categoria)
            · {{ $noticia->categoria }}
          @endif
        </p>

        {{-- Imagen principal --}}
        @if($noticia->imagen_portada)
          <div
            class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden rounded-xl min-h-[350px] mb-8"
            style="background-image: url('{{ asset('storage/'.$noticia->imagen_portada) }}');">
          </div>
        @endif

        {{-- CUERPO DE LA NOTICIA (NO TOCAR EL TEXTO “ESQUISITO”) --}}
        <div class="prose prose-lg max-w-none text-text-body dark:text-gray-300">
          {!! $noticia->contenido !!}
        </div>

        {{-- Botones para compartir (estilo similar al HTML de ejemplo) --}}
        <div class="mt-10 pt-6 border-t border-gray-200 dark:border-gray-700">
          <h3 class="text-lg font-bold text-text-body dark:text-gray-200 mb-4">Compartir Noticia</h3>
          <div class="flex items-center gap-4">
            <a class="flex items-center justify-center size-10 bg-primary/10 text-primary rounded-full hover:bg-accent hover:text-white transition-colors duration-200" href="#">
              {{-- Facebook --}}
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773L15.83 14.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
              </svg>
            </a>
            <a class="flex items-center justify-center size-10 bg-primary/10 text-primary rounded-full hover:bg-accent hover:text-white transition-colors duración-200" href="#">
              {{-- Twitter/X --}}
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                </path>
              </svg>
            </a>
            <a class="flex items-center justify-center size-10 bg-primary/10 text-primary rounded-full hover:bg-accent hover:text-white transition-colors duración-200" href="#">
              {{-- Más --}}
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M11.944 12.944c.535 0 .97-.435.97-.97s-.435-.97-.97-.97-.97.435-.97.97.435.97.97.97zm4.232 0c.535 0 .97-.435.97-.97s-.435-.97-.97-.97-.97.435-.97.97.435.97.97.97zm-8.464 0c.535 0 .97-.435.97-.97s-.435-.97-.97-.97-.97.435-.97.97.435.97.97.97z">
                </path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm1.5 0c0 4.545 3.69 8.25 8.25 8.25s8.25-3.705 8.25-8.25-3.69-8.25-8.25-8.25-8.25 3.705-8.25 8.25z">
                </path>
              </svg>
            </a>
          </div>
        </div>
      </article>

      {{-- SIDEBAR: Noticias relacionadas --}}
      <aside class="lg:col-span-1 space-y-8">
        <div>
          <h2 class="text-2xl font-bold text-primary dark:text-blue-200 mb-6 pb-2 border-b-2 border-primary/20 dark:border-blue-200/20">
            Noticias Relacionadas
          </h2>

          <div class="space-y-6">
            @forelse($relacionadas ?? [] as $rel)
              <a class="group block" href="{{ route('noticias.show', $rel->slug) }}">
                <div class="overflow-hidden rounded-lg border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 transition-all duration-300 group-hover:border-accent dark:group-hover:border-accent group-hover:shadow-md">
                  @if($rel->imagen_portada)
                    <img
                      class="h-40 w-full object-cover"
                      src="{{ asset('storage/'.$rel->imagen_portada) }}"
                      alt="{{ $rel->titulo }}">
                  @endif
                  <div class="p-4">
                    <h3 class="font-bold text-text-body dark:text-gray-200 leading-snug group-hover:text-primary dark:group-hover:text-blue-200">
                      {{ $rel->titulo }}
                    </h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                      {{ $rel->fecha_publicacion_formateada }}
                    </p>
                  </div>
                </div>
              </a>
            @empty
              <p class="text-sm text-gray-500 dark:text-gray-400">
                No hay noticias relacionadas por el momento.
              </p>
            @endforelse
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>
@endsection
