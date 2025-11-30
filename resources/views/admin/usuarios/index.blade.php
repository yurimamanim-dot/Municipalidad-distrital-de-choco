@extends('layouts.admin')

@section('title', 'Gestión de Usuarios')

@section('content')
    <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mb-6">
        <div>
            <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                Gestión de Usuarios
            </h1>
            <p class="mt-1 text-sm text-gray-600">
                Listado de cuentas registradas en el portal municipal.
            </p>
        </div>

        <a href="{{ route('admin.usuarios.create') }}"
           class="inline-flex items-center justify-center gap-2 rounded-lg bg-emerald-600 px-4 py-2
                  text-sm font-semibold text-white hover:bg-emerald-700">
            <span class="material-symbols-outlined text-base">add</span>
            Nuevo usuario
        </a>
    </div>

    @if ($usuarios->count())
        {{-- ====== VISTA MÓVIL: TARJETAS (solo < md) ====== --}}
        <div class="space-y-3 md:hidden">
            @foreach ($usuarios as $usuario)
                <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                    {{-- Cabecera: nombre + rol --}}
                    <div class="flex items-start justify-between gap-3">
                        <div>
                            <p class="text-xs font-semibold text-gray-500 uppercase">Usuario</p>
                            <p class="text-base font-semibold text-gray-900">
                                {{ $usuario->name }}
                            </p>
                            <p class="text-xs text-gray-500">
                                {{ $usuario->email }}
                            </p>
                        </div>

                        {{-- Chip de rol --}}
                        <div>
                            @if($usuario->role === 'admin')
                                <span class="inline-flex items-center rounded-full bg-purple-50 px-2 py-1 text-[11px] font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">
                                    Administrador
                                </span>
                            @else
                                <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-[11px] font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                    Personal
                                </span>
                            @endif
                        </div>
                    </div>

                    {{-- Fecha de registro --}}
                    <div class="mt-3 text-xs text-gray-500">
                        Registrado el {{ optional($usuario->created_at)->format('d/m/Y') }}
                    </div>

                    {{-- Acciones --}}
                    <div class="mt-4 flex flex-wrap gap-2">
                        <a href="{{ route('admin.usuarios.edit', $usuario) }}"
                           class="flex-1 min-w-[110px] inline-flex items-center justify-center rounded-lg border border-gray-200 px-3 py-1.5
                                  text-xs font-semibold text-gray-700 hover:bg-gray-100">
                            Editar
                        </a>

                        @if(auth()->id() !== $usuario->id)
                            <form action="{{ route('admin.usuarios.destroy', $usuario) }}"
                                  method="POST" class="flex-1 min-w-[110px]">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        onclick="return confirm('¿Eliminar este usuario?')"
                                        class="w-full inline-flex items-center justify-center rounded-lg border border-red-200 px-3 py-1.5
                                               text-xs font-semibold text-red-700 hover:bg-red-50">
                                    Eliminar
                                </button>
                            </form>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>

        {{-- ====== VISTA ESCRITORIO: TABLA (md+) ====== --}}
        <div class="hidden md:block">
            <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
                <table class="min-w-full text-left text-sm">
                    <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500">
                        <tr>
                            <th class="px-4 py-3">Nombre</th>
                            <th class="px-4 py-3">Correo</th>
                            <th class="px-4 py-3">Rol</th>
                            <th class="px-4 py-3">Fecha de registro</th>
                            <th class="px-4 py-3 text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($usuarios as $usuario)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-gray-900 font-medium">
                                    {{ $usuario->name }}
                                </td>
                                <td class="px-4 py-3 text-gray-700">
                                    {{ $usuario->email }}
                                </td>
                                <td class="px-4 py-3">
                                    @if($usuario->role === 'admin')
                                        <span class="inline-flex items-center rounded-full bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">
                                            Administrador
                                        </span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">
                                            Personal
                                        </span>
                                    @endif
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

                                    @if(auth()->id() !== $usuario->id)
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
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- Paginación escritorio --}}
                <div class="px-4 py-3 border-t border-gray-200">
                    {{ $usuarios->links() }}
                </div>
            </div>
        </div>

        {{-- Paginación móvil --}}
        <div class="mt-4 md:hidden">
            {{ $usuarios->links() }}
        </div>
    @else
        <div class="rounded-xl border border-dashed border-gray-300 bg-white py-12 px-4 text-center text-gray-500">
            <p>No hay usuarios registrados.</p>
        </div>
    @endif
@endsection
