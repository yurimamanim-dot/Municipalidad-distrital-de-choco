@extends('layouts.admin')

@section('title', 'Gestión de Usuarios')

@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-extrabold text-gray-900">
                Gestión de Usuarios
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Listado de cuentas registradas en el portal municipal.
            </p>
        </div>

        <a href="{{ route('admin.usuarios.create') }}"
           class="inline-flex items-center gap-2 rounded-lg bg-emerald-600 px-4 py-2
                  text-sm font-semibold text-white hover:bg-emerald-700">
            <span class="material-symbols-outlined text-base">add</span>
            Nuevo usuario
        </a>
    </div>

    {{-- Barra de búsqueda (visual por ahora) --}}
    <div class="mb-6">
        <div class="rounded-xl border border-gray-200 bg-white px-4 py-3 shadow-sm">
            <div class="relative">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                    search
                </span>
                <input
                    type="text"
                    class="h-11 w-full rounded-lg border border-transparent bg-gray-50 pl-10 pr-3 text-sm
                           text-gray-700 outline-none hover:bg-white focus:border-primary focus:bg-white focus:ring-1 focus:ring-primary"
                    placeholder="Buscar por nombre o correo..."
                >
            </div>
            <p class="mt-2 text-xs text-gray-500">
                (Búsqueda solo visual por ahora; luego podemos hacerla real con filtros.)
            </p>
        </div>
    </div>

    {{-- Tabla de usuarios --}}
    <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
        <table class="min-w-full text-left text-sm">
            <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500">
                <tr>
                    <th class="px-4 py-3">Nombre</th>
                    <th class="px-4 py-3">Correo</th>
                    <th class="px-4 py-3">Fecha de registro</th>
                    <th class="px-4 py-3 text-right">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse ($usuarios as $usuario)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-gray-900">
                            {{ $usuario->name }}
                        </td>
                        <td class="px-4 py-3 text-gray-700">
                            {{ $usuario->email }}
                        </td>
                        <td class="px-4 py-3 text-gray-700">
                            {{ optional($usuario->created_at)->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-3 text-right space-x-2">
                            <a href="{{ route('admin.usuarios.edit', $usuario) }}"
                               class="inline-flex items-center rounded-lg border border-gray-200 px-3 py-1.5
                                      text-xs font-semibold text-gray-700 hover:bg-gray-100">
                                Editar
                            </a>

                            <form action="{{ route('admin.usuarios.destroy', $usuario) }}"
                                  method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('¿Eliminar este usuario?')"
                                        class="inline-flex items-center rounded-lg border border-red-200 px-3 py-1.5
                                               text-xs font-semibold text-red-700 hover:bg-red-50">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-sm text-gray-500">
                            No hay usuarios registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
