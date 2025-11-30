<div class="grid grid-cols-1 gap-5 md:grid-cols-2">

  {{-- TÍTULO --}}
  <div class="md:col-span-2">
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Título
    </label>
    <input
      type="text"
      name="titulo"
      value="{{ old('titulo', $noticia->titulo ?? '') }}"
      class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
             focus:border-primary focus:ring-primary"
      placeholder="Ej: Municipalidad inaugura nuevo centro comunitario"
    >
    @error('titulo')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- BAJADA / RESUMEN --}}
  <div class="md:col-span-2">
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Bajada (resumen)
    </label>
    <input
      type="text"
      name="bajada"
      value="{{ old('bajada', $noticia->bajada ?? '') }}"
      class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
             focus:border-primary focus:ring-primary"
      placeholder="Texto breve que se mostrará como resumen de la noticia."
    >
    @error('bajada')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- CATEGORÍA --}}
  <div>
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Categoría
    </label>
    <select
      name="categoria"
      class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
             focus:border-primary focus:ring-primary"
    >
      <option value="">Seleccione...</option>
      @foreach($categorias as $cat)
        <option value="{{ $cat }}"
          {{ old('categoria', $noticia->categoria ?? '') === $cat ? 'selected' : '' }}>
          {{ $cat }}
        </option>
      @endforeach
    </select>
    @error('categoria')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- FECHA DE PUBLICACIÓN --}}
  <div>
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Fecha de publicación
    </label>
    <input
      type="datetime-local"
      name="publicado_en"
      value="{{ old('publicado_en', isset($noticia->publicado_en) ? $noticia->publicado_en->format('Y-m-d\TH:i') : '') }}"
      class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
             focus:border-primary focus:ring-primary"
    >
    @error('publicado_en')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- ESTADO (BORRADOR / PUBLICADO) --}}
  @php
      $estadoActual = (int) old('publicado', $noticia->publicado ?? 0);
  @endphp
  <div class="md:col-span-2 flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
    <div>
      <span class="block text-sm font-medium text-gray-700 mb-1">Estado</span>
      <p class="text-xs text-gray-500 max-w-md">
        Puedes guardar como borrador o marcarla como publicada en el portal.
      </p>
    </div>

    <div class="flex items-center gap-3">
      <select
        name="publicado"
        class="rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
               focus:border-primary focus:ring-primary"
      >
        <option value="0" {{ $estadoActual ? '' : 'selected' }}>Borrador</option>
        <option value="1" {{ $estadoActual ? 'selected' : '' }}>Publicado</option>
      </select>

      @if($estadoActual)
        <span class="inline-flex items-center rounded-full bg-emerald-50 px-2.5 py-0.5 text-xs font-semibold text-emerald-700">
          Publicado
        </span>
      @else
        <span class="inline-flex items-center rounded-full bg-yellow-50 px-2.5 py-0.5 text-xs font-semibold text-yellow-800">
          Borrador
        </span>
      @endif
    </div>
  </div>

  {{-- CONTENIDO (HTML) --}}
  <div class="md:col-span-2">
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Contenido
    </label>
    <textarea
      name="contenido"
      rows="12"
      class="w-full rounded-lg border border-gray-300 bg-white px-3 py-2 text-sm text-gray-900
             focus:border-primary focus:ring-primary"
      placeholder="Escribe aquí el contenido de la noticia. El editor permite aplicar formato."
    >{{ old('contenido', $noticia->contenido ?? '') }}</textarea>
    @error('contenido')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  {{-- IMAGEN DE PORTADA --}}
  <div class="space-y-2">
    <label class="mb-1 block text-sm font-medium text-gray-700">
      Imagen de portada
    </label>
    <input
      type="file"
      name="imagen_portada"
      class="block w-full text-sm text-gray-700
             file:mr-3 file:rounded-lg file:border-0 file:bg-primary file:px-3 file:py-1.5
             file:text-xs file:font-semibold file:text-white hover:file:bg-primary/90"
    >
    @error('imagen_portada')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror

    @if(!empty($noticia?->imagen_portada))
      <div class="mt-1">
        <p class="text-xs text-gray-500 mb-1">Portada actual:</p>
        <img
          src="{{ asset('storage/'.$noticia->imagen_portada) }}"
          alt="Portada actual"
          class="h-24 w-auto rounded-md border object-cover"
        >
      </div>
    @endif
  </div>

  {{-- CHECKBOX: DESTACADA EN INICIO --}}
  <div class="md:col-span-2 flex items-center gap-2">
    <input
      type="checkbox"
      name="es_destacada"
      id="es_destacada"
      value="1"
      {{ old('es_destacada', $noticia->es_destacada ?? false) ? 'checked' : '' }}
      class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary"
    >
    <label for="es_destacada" class="text-sm text-gray-700">
      Mostrar como noticia destacada en la página de inicio.
    </label>
  </div>

</div>

{{-- BOTONES --}}
<div class="mt-6 flex flex-col-reverse gap-2 sm:flex-row sm:items-center sm:justify-end">
  <a href="{{ route('admin.noticias.index') }}"
     class="inline-flex items-center justify-center rounded-lg border border-gray-300
            px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
    Cancelar
  </a>
  <button
    type="submit"
    class="inline-flex items-center justify-center rounded-lg bg-primary px-4 py-2
           text-sm font-semibold text-white hover:bg-primary/90"
  >
    Guardar
  </button>
</div>
