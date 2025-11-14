@extends('layouts.municipal')

@section('title','Administrar Noticias')

@section('content')
<div class="py-10">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Noticias</h1>
        <a href="{{ route('admin.noticias.create') }}"
           class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-white hover:bg-primary/90">
          <span class="material-symbols-outlined text-base">add</span>
          Nueva noticia
        </a>
      </div>

      @if(session('success'))
        <div class="mb-4 rounded-lg bg-green-100 px-4 py-2 text-sm text-green-800">
          {{ session('success') }}
        </div>
      @endif

      <div class="overflow-x-auto rounded-lg border border-gray-200">
        <table class="min-w-full text-sm text-gray-700">
          <thead class="bg-gray-100">
            <tr>
              <th class="px-4 py-2 text-left">Título</th>
              <th class="px-4 py-2 text-left">Categoría</th>
              <th class="px-4 py-2 text-left">Fecha</th>
              <th class="px-4 py-2 text-left">Destacada</th>
              <th class="px-4 py-2 text-right">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @forelse($noticias as $noticia)
              <tr class="border-t border-gray-200">
                <td class="px-4 py-2">
                  <div class="font-semibold">{{ $noticia->titulo }}</div>
                  <div class="text-xs text-gray-500">{{ $noticia->slug }}</div>
                </td>
                <td class="px-4 py-2">
                  {{ $noticia->categoria ?? '-' }}
                </td>
                <td class="px-4 py-2">
                  {{ $noticia->fecha_publicacion_formateada }}
                </td>
                <td class="px-4 py-2">
                  @if($noticia->es_destacada)
                    <span class="inline-flex items-center rounded-full bg-green-100 px-2 py-0.5 text-xs text-green-800">
                      Sí
                    </span>
                  @else
                    <span class="inline-flex items-center rounded-full bg-gray-100 px-2 py-0.5 text-xs text-gray-600">
                      No
                    </span>
                  @endif
                </td>
                <td class="px-4 py-2 text-right">
                  <div class="inline-flex gap-2">
                    <a href="{{ route('admin.noticias.edit', $noticia) }}"
                       class="text-xs font-semibold text-primary hover:underline">
                      Editar
                    </a>
                    <form action="{{ route('admin.noticias.destroy', $noticia) }}" method="POST"
                          onsubmit="return confirm('¿Eliminar esta noticia?')">
                      @csrf
                      @method('DELETE')
                      <button type="submit"
                              class="text-xs font-semibold text-red-600 hover:underline">
                        Eliminar
                      </button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-500">
                  Aún no hay noticias registradas.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="mt-4">
        {{ $noticias->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
