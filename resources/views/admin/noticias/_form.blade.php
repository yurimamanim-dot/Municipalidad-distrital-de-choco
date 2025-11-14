@csrf

<div class="grid gap-4 md:grid-cols-2">
  <div class="md:col-span-2">
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Título
    </label>
    <input type="text" name="titulo"
           value="{{ old('titulo', $noticia->titulo ?? '') }}"
           class="w-full rounded-lg border-gray-300 bg-white text-sm focus:border-primary focus:ring-primary">
    @error('titulo')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div class="md:col-span-2">
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Bajada (resumen)
    </label>
    <input type="text" name="bajada"
           value="{{ old('bajada', $noticia->bajada ?? '') }}"
           class="w-full rounded-lg border-gray-300 bg-white text-sm focus:border-primary focus:ring-primary">
    @error('bajada')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Categoría
    </label>
    <select name="categoria"
            class="w-full rounded-lg border-gray-300 bg-white text-sm focus:border-primary focus:ring-primary">
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

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Fecha de publicación
    </label>
    <input type="datetime-local" name="publicado_en"
           value="{{ old('publicado_en', isset($noticia->publicado_en) ? $noticia->publicado_en->format('Y-m-d\TH:i') : '') }}"
           class="w-full rounded-lg border-gray-300 bg-white text-sm focus:border-primary focus:ring-primary">
    @error('publicado_en')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div class="md:col-span-2">
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Contenido
    </label>
    <textarea name="contenido" rows="8"
              class="w-full rounded-lg border-gray-300 bg-white text-sm focus:border-primary focus:ring-primary">{{ old('contenido', $noticia->contenido ?? '') }}</textarea>
    @error('contenido')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
  </div>

  <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">
      Imagen de portada
    </label>
    <input type="file" name="imagen_portada"
           class="block w-full text-sm text-gray-700
                  file:mr-3 file:rounded-lg file:border-0 file:bg-primary file:px-3 file:py-1.5
                  file:text-xs file:font-semibold file:text-white hover:file:bg-primary/90">
    @error('imagen_portada')
      <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror

    @if(!empty($noticia?->imagen_portada))
      <div class="mt-2">
        <img src="{{ asset('storage/'.$noticia->imagen_portada) }}"
             alt="Portada actual"
             class="h-24 w-auto rounded-md object-cover border">
      </div>
    @endif
  </div>

  <div class="flex items-center gap-2 md:col-span-2">
    <input type="checkbox" name="es_destacada" id="es_destacada"
           value="1"
           {{ old('es_destacada', $noticia->es_destacada ?? false) ? 'checked' : '' }}
           class="rounded border-gray-300 text-primary focus:ring-primary">
    <label for="es_destacada" class="text-sm text-gray-700">
      Mostrar como noticia destacada (inicio)
    </label>
  </div>
</div>

<div class="mt-6 flex justify-end gap-2">
  <a href="{{ route('admin.noticias.index') }}"
     class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50">
    Cancelar
  </a>
  <button type="submit"
          class="rounded-lg bg-primary px-4 py-2 text-sm font-semibold text-white hover:bg-primary/90">
    Guardar
  </button>
</div>
