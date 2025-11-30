@extends('layouts.admin')

@section('title', 'Mesa de Partes')

@section('content')
    @php
        use Illuminate\Support\Str;
    @endphp

    <div class="space-y-6">
        {{-- Título --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900">
                    Mesa de Partes
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Gestión de solicitudes y expedientes recibidos.
                </p>
            </div>
        </div>

        @if ($tramites->count())

            {{-- VISTA MÓVIL: tarjetas (solo < md) --}}
            <div class="space-y-3 md:hidden">
                @foreach ($tramites as $tramite)
                    <article class="rounded-xl border border-gray-200 bg-white p-4 shadow-sm">
                        {{-- Encabezado: expediente + estado --}}
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <p class="text-xs font-semibold text-gray-500 uppercase">Expediente</p>
                                <p class="text-base font-bold text-blue-900">
                                    {{ $tramite->expediente }}
                                </p>
                            </div>

                            {{-- Estado (select) --}}
                            <form action="{{ route('admin.tramites.estado', $tramite) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <select
                                    name="estado"
                                    onchange="this.form.submit()"
                                    class="text-xs rounded-full px-3 py-1 border-0 cursor-pointer focus:ring-2 focus:ring-blue-500 font-medium
                                        {{ $tramite->estado === 'recibido' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                        {{ $tramite->estado === 'en_proceso' ? 'bg-blue-100 text-blue-800' : '' }}
                                        {{ $tramite->estado === 'atendido' ? 'bg-green-100 text-green-800' : '' }}
                                        {{ $tramite->estado === 'rechazado' ? 'bg-red-100 text-red-800' : '' }}"
                                >
                                    <option value="recibido"  {{ $tramite->estado === 'recibido'  ? 'selected' : '' }}>Recibido</option>
                                    <option value="atendido"  {{ $tramite->estado === 'atendido'  ? 'selected' : '' }}>Atendido</option>
                                </select>
                            </form>
                        </div>

                        {{-- Remitente --}}
                        <div class="mt-4 space-y-1 text-sm">
                            <p class="font-semibold text-gray-900">{{ $tramite->nombre }}</p>
                            <p class="text-xs text-gray-500">Doc.: {{ $tramite->documento }}</p>
                            <p class="text-xs text-gray-500">{{ $tramite->correo }}</p>
                            @if ($tramite->telefono)
                                <p class="text-xs text-gray-500">{{ $tramite->telefono }}</p>
                            @endif
                        </div>

                        {{-- Asunto --}}
                        <div class="mt-3 text-sm">
                            <p class="text-gray-900 font-medium">
                                {{ ucfirst($tramite->tipo) }}
                            </p>
                            <p class="text-gray-600 text-xs mt-1">
                                {{ Str::limit($tramite->asunto, 100) }}
                            </p>
                        </div>

                        {{-- Adjuntos --}}
                        @if ($tramite->adjuntos->count() > 0)
                            <div class="mt-3 space-y-1">
                                @foreach ($tramite->adjuntos as $adjunto)
                                    <a href="{{ asset('storage/' . $adjunto->path) }}" target="_blank"
                                       class="text-xs text-blue-600 hover:underline flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">attach_file</span>
                                        <span class="truncate">{{ $adjunto->nombre_original }}</span>
                                    </a>
                                @endforeach
                            </div>
                        @endif

                        {{-- Fecha --}}
                        <div class="mt-3 flex justify-between items-center text-xs text-gray-500">
                            <span>{{ $tramite->created_at->format('d/m/Y') }}</span>
                            <span>{{ $tramite->created_at->format('H:i') }}</span>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- VISTA DESKTOP: tabla (solo md+) --}}
            <div class="hidden md:block">
                <div class="overflow-x-auto rounded-xl border border-gray-200 bg-white shadow-sm">
                    <table class="min-w-full text-left text-sm">
                        <thead class="bg-gray-50 text-xs font-semibold uppercase text-gray-500">
                            <tr>
                                <th class="px-4 py-3">Expediente</th>
                                <th class="px-4 py-3">Remitente / Contacto</th>
                                <th class="px-4 py-3">Asunto</th>
                                <th class="px-4 py-3">Estado</th>
                                <th class="px-4 py-3 text-right">Fecha</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($tramites as $tramite)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    {{-- Expediente --}}
                                    <td class="px-4 py-3 align-top">
                                        <span class="font-bold text-blue-900 block">
                                            {{ $tramite->expediente }}
                                        </span>

                                        @if ($tramite->adjuntos->count() > 0)
                                            @foreach ($tramite->adjuntos as $adjunto)
                                                <a href="{{ asset('storage/' . $adjunto->path) }}" target="_blank"
                                                   class="text-xs text-blue-600 hover:underline flex items-center gap-1 mt-1">
                                                    <span class="material-symbols-outlined text-[14px]">attach_file</span>
                                                    {{ $adjunto->nombre_original }}
                                                </a>
                                            @endforeach
                                        @endif
                                    </td>

                                    {{-- Remitente --}}
                                    <td class="px-4 py-3 align-top">
                                        <p class="font-semibold text-gray-900">{{ $tramite->nombre }}</p>
                                        <p class="text-xs text-gray-500">Doc.: {{ $tramite->documento }}</p>
                                        <p class="text-xs text-gray-500">{{ $tramite->correo }}</p>
                                        @if ($tramite->telefono)
                                            <p class="text-xs text-gray-500">{{ $tramite->telefono }}</p>
                                        @endif
                                    </td>

                                    {{-- Asunto --}}
                                    <td class="px-4 py-3 align-top max-w-xs">
                                        <p class="text-gray-900 font-medium">
                                            {{ ucfirst($tramite->tipo) }}
                                        </p>
                                        <p class="text-gray-600 text-xs mt-1">
                                            {{ Str::limit($tramite->asunto, 80) }}
                                        </p>
                                    </td>

                                    {{-- Estado --}}
                                    <td class="px-4 py-3 align-top">
                                        <form action="{{ route('admin.tramites.estado', $tramite) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <select name="estado"
                                                    onchange="this.form.submit()"
                                                    class="text-xs rounded-full px-3 py-1 border-0 cursor-pointer focus:ring-2 focus:ring-blue-500 font-medium
                                                        {{ $tramite->estado === 'recibido' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                                        {{ $tramite->estado === 'en_proceso' ? 'bg-blue-100 text-blue-800' : '' }}
                                                        {{ $tramite->estado === 'atendido' ? 'bg-green-100 text-green-800' : '' }}
                                                        {{ $tramite->estado === 'rechazado' ? 'bg-red-100 text-red-800' : '' }}">
                                                <option value="recibido" {{ $tramite->estado === 'recibido' ? 'selected' : '' }}>Recibido</option>
                                                <option value="atendido" {{ $tramite->estado === 'atendido' ? 'selected' : '' }}>Atendido</option>
                                            </select>
                                        </form>
                                    </td>

                                    {{-- Fecha --}}
                                    <td class="px-4 py-3 text-right text-gray-700 align-top">
                                        {{ $tramite->created_at->format('d/m/Y') }}
                                        <span class="block text-xs text-gray-400">
                                            {{ $tramite->created_at->format('H:i') }}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{-- Paginación --}}
                    <div class="px-4 py-3 border-t border-gray-200">
                        {{ $tramites->links() }}
                    </div>
                </div>
            </div>

        @else
            {{-- Sin datos (mismo mensaje para móvil / desktop) --}}
            <div class="rounded-xl border border-dashed border-gray-300 bg-white py-12 px-4 text-center text-gray-500">
                <div class="flex flex-col items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-4xl mb-1 text-gray-300">inbox</span>
                    <p>No hay solicitudes pendientes en la mesa de partes.</p>
                </div>
            </div>
        @endif

        {{-- Paginación extra fuera por si quieres que siempre aparezca (opcional) --}}
        @if ($tramites->count())
            <div class="md:hidden">
                {{ $tramites->links() }}
            </div>
        @endif
    </div>
@endsection
