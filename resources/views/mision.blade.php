{{-- resources/views/mision.blade.php --}}
@extends('layouts.app')

@section('title', 'Municipalidad - Nuestra Misión')

@section('content')
  <div class="flex justify-center py-10">
    <div class="w-full max-w-5xl px-4 flex flex-col gap-12">

      {{-- Encabezado --}}
      <section class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
        <div class="flex flex-col gap-4">
          <h1 class="text-primary text-4xl sm:text-5xl font-black leading-tight tracking-tight">
            Nuestra Misión
          </h1>
          <p class="text-gray-600 text-lg">
            Contribuir al bienestar de los vecinos a través de una gestión transparente,
            eficiente y sostenible.
          </p>
        </div>

        <div class="flex w-full">
          <div class="w-full overflow-hidden rounded-xl shadow-lg aspect-[4/3]">
            <div
              class="w-full h-full bg-center bg-cover"
              style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBxxYskaJMQ9Y5yMVE8mzxdTPnHHxlKDCiqjVdFUrtTxXw54H9BRdrkwXAs9huXgGyd2z1PMIH3zr2twG4OGvf89EWbIKJffvdSx5Oo8EiWCDX-11ynMuDDjH-OucseJ3HL3l6xZFZfQnCAjMXOPAmqnHuLy2SEw6a2ekwS-tY5fVUAoak39nNgfZkBVvB3uAJa_r1j48knyXZ5npnYiJU_7WN_j1dHjbKhtuffncPW04_2-14GrM3WQdEI5RP56UGOm6isTrDOYlxs");'
            ></div>
          </div>
        </div>
      </section>

      {{-- Valores asociados a la misión --}}
      <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="flex flex-col items-center text-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-100 text-green-700 mb-4">
              <span class="material-symbols-outlined text-3xl">manage_search</span>
            </div>
            <h2 class="text-primary text-xl font-bold mb-1">Transparencia</h2>
            <p class="text-gray-500 text-sm">Gestión clara y accesible para todos los vecinos.</p>
          </div>

          <div class="flex flex-col items-center text-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-100 text-green-700 mb-4">
              <span class="material-symbols-outlined text-3xl">groups</span>
            </div>
            <h2 class="text-primary text-xl font-bold mb-1">Compromiso</h2>
            <p class="text-gray-500 text-sm">Dedicados al servicio y bienestar de nuestra comunidad.</p>
          </div>

          <div class="flex flex-col items-center text-center p-6 bg-white rounded-xl shadow-md hover:shadow-lg transition">
            <div class="flex items-center justify-center h-16 w-16 rounded-full bg-green-100 text-green-700 mb-4">
              <span class="material-symbols-outlined text-3xl">potted_plant</span>
            </div>
            <h2 class="text-primary text-xl font-bold mb-1">Desarrollo Local</h2>
            <p class="text-gray-500 text-sm">Impulsando el crecimiento sostenible y la calidad de vida.</p>
          </div>
        </div>
      </section>

    </div>
  </div>
@endsection
