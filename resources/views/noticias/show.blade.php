@extends('layouts.municipal')

@section('title', $noticia->titulo)

@section('content')
<section class="font-display bg-background-light text-[#1A1A1A] py-8">
  <div class="px-4 sm:px-8 md:px-16 lg:px-24 xl:px-40 flex justify-center">
    <div class="max-w-[800px] w-full">

      <a href="{{ route('noticias.index') }}"
         class="inline-flex items-center text-sm text-[#555555] hover:text-primary mb-4">
        <span class="material-symbols-outlined text-base mr-1">chevron_left</span>
        Volver a noticias
      </a>

      <p class="text-xs text-gray-500">
        {{ $noticia->fecha_publicacion_formateada }}
        @if($noticia->categoria)
          · {{ $noticia->categoria }}
        @endif
      </p>

      <h1 class="mt-2 text-3xl font-black leading-tight tracking-[-0.03em] text-[#1A1A1A]">
        {{ $noticia->titulo }}
      </h1>

      @if($noticia->bajada)
        <p class="mt-3 text-lg text-gray-700">
          {{ $noticia->bajada }}
        </p>
      @endif

      @if($noticia->imagen_portada)
        <div class="mt-6 rounded-xl overflow-hidden shadow-md">
          <img src="{{ asset('storage/'.$noticia->imagen_portada) }}"
               alt="{{ $noticia->titulo }}"
               class="w-full object-cover">
        </div>
      @endif>

      <article class="mt-8 prose prose-sm sm:prose-lg max-w-none text-gray-800">
        {!! nl2br(e($noticia->contenido)) !!}
      </article>
    </div>
  </div>
</section>
@endsection
