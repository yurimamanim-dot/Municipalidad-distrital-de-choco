@extends('layouts.municipal')
@section('title','Confirmación de Envío')

@section('content')
<main class="flex flex-grow items-center justify-center">
  <div class="container mx-auto max-w-2xl px-4 py-16 md:py-24">
    <div class="flex flex-col items-center text-center">

      <span class="material-symbols-outlined text-accent !text-9xl"
            style="font-variation-settings:'FILL' 1,'wght' 400,'GRAD' 0,'opsz' 48">check_circle</span>

      <h2 class="font-display text-4xl font-bold text-primary mt-4">¡Envío realizado con éxito!</h2>

      <p class="mt-4 max-w-lg text-lg text-gray-700">
        Tu documento fue recibido y será procesado por la Municipalidad de Choco.
      </p>

      <div class="mt-6 w-full max-w-md rounded-xl border border-gray-200 bg-white p-5 text-left">
        <p class="text-sm text-gray-500">N° de expediente</p>
        <p class="text-2xl font-extrabold text-primary">{{ $expediente }}</p>

        @if(!empty($nombre) || !empty($correo))
          <div class="mt-4 grid grid-cols-1 gap-2">
            @if(!empty($nombre))
              <p class="text-sm"><span class="font-semibold">Remitente:</span> {{ $nombre }}</p>
            @endif
            @if(!empty($correo))
              <p class="text-sm"><span class="font-semibold">Correo:</span> {{ $correo }}</p>
            @endif
          </div>
        @endif

        <p class="mt-4 text-sm text-gray-600">
          Te enviaremos un correo de confirmación. Conserva este número para futuras consultas internas.
        </p>
      </div>

      <div class="mt-8 flex flex-col items-center gap-3 sm:flex-row">
        <a href="{{ route('home') }}"
           class="flex min-w-[220px] items-center justify-center rounded-lg h-12 px-6 bg-accent text-white text-sm font-bold uppercase tracking-wider hover:opacity-90 transition">
          Volver al Inicio
        </a>
        <a href="{{ route('mesa') }}"
           class="flex min-w-[220px] items-center justify-center rounded-lg h-12 px-6 bg-white border border-primary text-primary text-sm font-bold uppercase tracking-wider hover:bg-gray-50 transition">
          Enviar otro documento
        </a>
      </div>

      <p class="mt-6 text-xs text-gray-500">
        ¿Necesitas ayuda? Escríbenos a <span class="font-semibold">informes@municipalidad.gob.pe</span> o llama al <span class="font-semibold">(01) 123-4567</span>.
      </p>
    </div>
  </div>
</main>
@endsection
