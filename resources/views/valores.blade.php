{{-- resources/views/valores.blade.php --}}
@extends('layouts.app')

@section('title', 'Municipalidad - Nuestros Valores')

@section('content')
  <div class="flex justify-center py-10">
    <div class="max-w-5xl w-full px-4">

      {{-- Encabezado --}}
      <div class="text-center mb-10">
        <p class="text-primary text-4xl font-black leading-tight">
          Nuestros Valores
        </p>
        <p class="text-gray-600 mt-3">
          Los principios que guían nuestro compromiso con la comunidad.
        </p>
      </div>

      {{-- Grid de valores --}}
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
          $valores = [
            ['icon' => 'shield_with_heart', 'titulo' => 'Responsabilidad', 'texto' => 'Compromiso con nuestras obligaciones y el buen uso de los recursos públicos.'],
            ['icon' => 'balance', 'titulo' => 'Transparencia', 'texto' => 'Garantizamos el acceso a la información pública y actuamos con honestidad.'],
            ['icon' => 'groups', 'titulo' => 'Inclusión', 'texto' => 'Fomentamos la diversidad y la participación activa de todos los ciudadanos.'],
            ['icon' => 'handshake', 'titulo' => 'Respeto', 'texto' => 'Promovemos la dignidad y la consideración en el trato con nuestra comunidad.'],
            ['icon' => 'lightbulb', 'titulo' => 'Innovación', 'texto' => 'Buscamos soluciones creativas y eficientes para el bien común.'],
            ['icon' => 'volunteer_activism', 'titulo' => 'Solidaridad', 'texto' => 'Fomentamos el apoyo mutuo y trabajamos juntos por el bienestar de todos.'],
          ];
        @endphp

        @foreach($valores as $valor)
          <div class="flex flex-col items-center text-center gap-4 rounded-xl border border-gray-200 bg-white p-6 hover:shadow-lg hover:-translate-y-1 transition">
            <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 text-green-700">
              <span class="material-symbols-outlined">{{ $valor['icon'] }}</span>
            </div>
            <div class="flex flex-col gap-1">
              <h2 class="text-primary text-base font-bold">{{ $valor['titulo'] }}</h2>
              <p class="text-gray-600 text-sm">{{ $valor['texto'] }}</p>
            </div>
          </div>
        @endforeach
      </div>

      <div class="py-12">
        <h3 class="text-green-700 text-2xl font-bold text-center">
          Guiamos cada acción con ética y compromiso por nuestra comunidad.
        </h3>
      </div>

    </div>
  </div>
@endsection
