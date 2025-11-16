@extends('layouts.admin')

@section('title', 'Gestión de Usuarios')
@section('header', 'Gestión de Usuarios')

@section('content')
<div class="flex flex-col gap-6">

  {{-- Toolbar: búsqueda + filtros + crear --}}
  <div class="flex flex-col md:flex-row justify-between gap-4 p-4 rounded-xl bg-white dark:bg-gray-900/50 border border-gray-200 dark:border-gray-700">
    <form method="GET" action="{{ route('usuarios.index') }}" class="flex flex-col md:flex-row gap-2 flex-1">
      <div class="relative w-full md:max-w-xs">
        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">search</span>
        <input
          name="q"
          value="{{ request('q') }}"
          class="pl-10 w-full h-10 rounded-lg border-gray-300 dark:border-gray-700 bg-transparent focus:ring-primary focus:border-primary"
          placeholder="Buscar por nombre o correo..."
          type="text"
        />
      </div>

      <select name="rol"
              class="h-10 rounded-lg border-gray-300 dark:border-gray-700 bg-transparent focus:ring-primary focus:border-primary">
        <option value="">Filtrar por Rol</option>
        <option value="admin"     @selected(request('rol')==='admin')>Administrador</option>
        <option value="editor"    @selected(request('rol')==='editor')>Editor</option>
        <option value="personal"  @selected(request('rol')==='personal')>Personal Municipal</option>
      </select>

      <select name="estado"
              class="h-10 rounded-lg border-gray-300 dark:border-gray-700 bg-transparent focus:ring-primary focus:border-primary">
        <option value="">Filtrar por Estado</option>
        <option value="activo"   @selected(request('estado')==='activo')>Activo</option>
        <option value="inactivo" @selected(request('estado')==='inactivo')>Inactivo</option>
      </select>

      {{-- En móvil conviene tener botón Buscar explícito --}}
      <button class="md:hidden h-10 px-4 rounded-lg bg-primary text-white">Buscar</button>
    </form>

    @can('create', App\Models\User::class)
    <a href="{{ route('usuarios.create') }}"
       class="flex-shrink-0 flex items-center justify-center rounded-lg h-10 bg-green-600 text-white gap-2 text-sm font-bold px-4 hover:bg-green-700">
      <span class="material-symbols-outlined text-xl">add</span>
      <span>Crear Nuevo Usuario</span>
    </a>
    @endcan
  </div>

  {{-- Tabla --}}
  <div class="overflow-x-auto">
    <div class="inline-block min-w-full align-middle">
      <div class="overflow-hidden rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900/50">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
          <thead class="bg-gray-50 dark:bg-gray-800/60">
            <tr>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Nombre</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Correo</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Rol</th>
              <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Estado</th>
              <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 dark:text-gray-300 uppercase tracking-wider">Acciones</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
            @forelse ($usuarios as $u)
              <tr class="hover:bg-gray-50 dark:hover:bg-gray-800/40">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100">
                  {{ $u->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300">
                  {{ $u->email }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-gray-300 capitalize">
                  {{ $u->role ?? '—' }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm">
                  @if(($u->status ?? 'activo') === 'activo')
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">Activo</span>
                  @else
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300">Inactivo</span>
                  @endif
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                  <div class="flex items-center justify-end gap-2">
                    @can('update', $u)
                      <a href="{{ route('usuarios.edit', $u) }}"
                         class="p-2 rounded-full hover:bg-black/5 dark:hover:bg-white/5 text-gray-600 dark:text-gray-300"
                         title="Editar">
                        <span class="material-symbols-outlined">edit</span>
                      </a>
                    @endcan

                    @can('delete', $u)
                      <form method="POST" action="{{ route('usuarios.destroy', $u) }}"
                            onsubmit="return confirm('¿Eliminar este usuario?');">
                        @csrf @method('DELETE')
                        <button class="p-2 rounded-full hover:bg-black/5 dark:hover:bg-white/5 text-red-600 dark:text-red-400" title="Eliminar">
                          <span class="material-symbols-outlined">delete</span>
                        </button>
                      </form>
                    @endcan
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="px-6 py-8 text-center text-sm text-gray-500 dark:text-gray-400">
                  No se encontraron usuarios con los filtros aplicados.
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- Paginación --}}
  <div class="flex items-center justify-between">
    <p class="hidden sm:block text-sm text-gray-600 dark:text-gray-400">
      Mostrando
      <span class="font-medium">{{ $usuarios->firstItem() }}</span>
      a
      <span class="font-medium">{{ $usuarios->lastItem() }}</span>
      de
      <span class="font-medium">{{ $usuarios->total() }}</span>
      resultados
    </p>
    <div class="flex-1 flex justify-end">
      {{ $usuarios->withQueryString()->links() }}
    </div>
  </div>

</div>
@endsection
