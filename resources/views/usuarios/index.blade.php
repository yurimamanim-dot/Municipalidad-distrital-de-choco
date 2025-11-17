<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        {{-- Encabezado --}}
        <header class="flex flex-wrap justify-between items-center gap-4 mb-6">
            <div>
                <h1 class="text-3xl font-black tracking-tight text-gray-900">
                    Gestión de usuarios
                </h1>
                <p class="text-sm text-gray-600">
                    Listado de usuarios registrados en el sistema.
                </p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('usuarios.create') }}"
                   class="flex cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 bg-emerald-600 text-white gap-2 text-sm font-bold leading-normal tracking-wide min-w-0 px-4 hover:bg-emerald-700 transition-colors">
                    <span class="material-symbols-outlined text-xl">add</span>
                    <span class="truncate">Crear nuevo usuario</span>
                </a>
            </div>
        </header>

        {{-- Alertas --}}
        @if(session('ok'))
            <div class="mb-4 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-800">
                {{ session('ok') }}
            </div>
        @endif

        {{-- Barra de filtros (estética, aún sin lógica) --}}
        <div class="mb-6 flex flex-col md:flex-row justify-between gap-4 p-4 rounded-xl bg-white border border-gray-200">
            <div class="flex flex-col md:flex-row gap-2 flex-1">
                <div class="relative w-full md:max-w-xs">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">
                        search
                    </span>
                    <input
                        type="text"
                        class="pl-10 w-full h-10 rounded-lg border-gray-300 bg-transparent focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm"
                        placeholder="Buscar por nombre o correo..."
                    />
                </div>

                <select
                    class="h-10 rounded-lg border-gray-300 bg-transparent focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm">
                    <option>Filtrar por rol</option>
                    <option>Administrador</option>
                    <option>Editor</option>
                    <option>Personal municipal</option>
                </select>

                <select
                    class="h-10 rounded-lg border-gray-300 bg-transparent focus:ring-1 focus:ring-blue-500 focus:border-blue-500 text-sm">
                    <option>Filtrar por estado</option>
                    <option>Activo</option>
                    <option>Inactivo</option>
                </select>
            </div>
        </div>

        {{-- Tabla --}}
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden rounded-xl border border-gray-200 bg-white">
                    <table class="min-w-full divide-y divide-gray-200 text-sm">
                        <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Correo electrónico
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Fecha de registro
                            </th>
                            <th class="relative px-6 py-3">
                                <span class="sr-only">Acciones</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                        @forelse($usuarios as $usuario)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                                    {{ $usuario->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-medium text-gray-900">
                                    {{ $usuario->name }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                    {{ $usuario->email }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-gray-600">
                                    {{ optional($usuario->created_at)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm">
                                    <button
                                        class="p-1 rounded-full hover:bg-gray-100 text-gray-500"
                                        type="button">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-6 text-center text-gray-500">
                                    No hay usuarios registrados.
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Paginación --}}
        <div class="mt-4">
            {{ $usuarios->links() }}
        </div>
    </div>
</x-app-layout>
