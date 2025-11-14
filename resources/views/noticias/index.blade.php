@extends('layouts.municipal')

@section('title', 'Noticias Municipales')

@section('content')
<section class="font-display bg-background-light text-[#1A1A1A]">
  <div class="layout-container flex h-full grow flex-col">
    <div class="px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 flex flex-1 justify-center py-5">
      <div class="layout-content-container flex flex-col max-w-[960px] flex-1">

        {{-- TÍTULO --}}
        <div class="flex flex-wrap justify-between gap-3 p-4">
          <h1 class="text-4xl font-black leading-tight tracking-[-0.033em] min-w-72 text-[#1A1A1A]">
            Noticias Municipales
          </h1>
        </div>

        {{-- FILTROS POR CATEGORÍA --}}
        <div class="flex gap-2 p-3 overflow-x-auto">
          @foreach($categorias as $cat)
            @php
              $isActive = ($categoria === $cat) || (!$categoria && $cat === 'Todos');
            @endphp
            <a
              href="{{ $cat === 'Todos' ? route('noticias.index') : route('noticias.index', ['categoria' => $cat]) }}"
              class="h-8 shrink-0 inline-flex items-center justify-center gap-x-2 rounded-full px-4 text-sm font-medium leading-normal
                {{ $isActive
                  ? 'bg-primary text-white'
                  : 'bg-gray-200 text-[#555555] hover:bg-gray-300 transition-colors' }}">
              {{ $cat }}
            </a>
          @endforeach
        </div>

        {{-- GRID DE NOTICIAS --}}
        @if($noticias->isEmpty())
          <div class="p-4">
            <p class="text-sm text-gray-600">
              Por el momento no hay noticias publicadas en esta categoría.
            </p>
          </div>
        @else
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
            @foreach($noticias as $noticia)
              <article
                class="flex flex-col gap-3 rounded-xl overflow-hidden bg-white shadow-sm hover:shadow-lg transition-shadow duration-300 group">

                {{-- Imagen como background (manteniendo tu estilo) --}}
                <a href="{{ route('noticias.show', $noticia->slug) }}">
                  <div
                    class="w-full bg-center bg-no-repeat aspect-video bg-cover"
                    @if($noticia->imagen_portada)
                      style="background-image: url('{{ asset('storage/'.$noticia->imagen_portada) }}');"
                    @else
                      style="background-image: linear-gradient(to right, #e5e7eb, #d1d5db);"
                    @endif>
                  </div>
                </a>

                <div class="p-4 flex flex-col flex-1">
                  <p class="text-[#555555] text-xs font-normal leading-normal">
                    {{ $noticia->fecha_publicacion_formateada }}
                  </p>
                  <h3 class="text-[#1A1A1A] text-lg font-bold leading-tight my-1 flex-1 line-clamp-2">
                    {{ $noticia->titulo }}
                  </h3>
                  @if($noticia->bajada)
                    <p class="text-sm text-gray-600 line-clamp-3">
                      {{ $noticia->bajada }}
                    </p>
                  @endif
                  <a class="text-primary text-sm font-bold leading-normal mt-2 group-hover:underline"
                     href="{{ route('noticias.show', $noticia->slug) }}">
                    Leer más
                  </a>
                </div>
              </article>
            @endforeach
          </div>

          {{-- PAGINACIÓN --}}
          <div class="flex items-center justify-center p-4">
            {{ $noticias->links() }}
          </div>
        @endif

      </div>
    </div>
  </div>
</section>
@endsection
