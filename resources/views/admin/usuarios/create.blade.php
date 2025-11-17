<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        {{-- Volver + título --}}
        <div class="mb-6 flex items-center justify-between gap-3">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    Crear nuevo usuario
                </h1>
                <p class="text-sm text-gray-600">
                    Registra una nueva cuenta para el portal municipal.
                </p>
            </div>

            <a href="{{ route('admin.usuarios.index') }}"
               class="inline-flex items-center gap-2 rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                <span class="material-symbols-outlined text-sm">arrow_back</span>
                <span>Volver al listado</span>
            </a>
        </div>

        {{-- Errores de validación --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                <p class="font-semibold">Revisa los siguientes campos:</p>
                <ul class="mt-2 list-disc pl-5">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:p-8">
            <form action="{{ route('admin.usuarios.store') }}" method="POST" class="grid grid-cols-1 gap-x-6 gap-y-6 md:grid-cols-2">
                @csrf

                {{-- Nombre --}}
                <div class="md:col-span-2">
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Nombre completo</span>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            placeholder="Ej: Juan Pérez"
                            class="h-11 w-full rounded-lg border border-gray-300 px-4 text-sm text-gray-900 placeholder:text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        >
                    </label>
                </div>

                {{-- Email --}}
                <div class="md:col-span-2">
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Correo electrónico</span>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="Ej: juan.perez@email.com"
                            class="h-11 w-full rounded-lg border border-gray-300 px-4 text-sm text-gray-900 placeholder:text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        >
                    </label>
                </div>

                {{-- Contraseña --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Contraseña</span>
                        <input
                            type="password"
                            name="password"
                            placeholder="••••••••"
                            class="h-11 w-full rounded-lg border border-gray-300 px-4 text-sm text-gray-900 placeholder:text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        >
                    </label>
                </div>

                {{-- Confirmar contraseña --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Confirmar contraseña</span>
                        <input
                            type="password"
                            name="password_confirmation"
                            placeholder="••••••••"
                            class="h-11 w-full rounded-lg border border-gray-300 px-4 text-sm text-gray-900 placeholder:text-gray-400 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                        >
                    </label>
                </div>

                {{-- Estos selects son decorativos por ahora (no se guardan en BD) --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Rol (opcional)</span>
                        <select
                            class="h-11 w-full rounded-lg border border-gray-300 bg-white px-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                            name="role">
                            <option value="" selected>Seleccione un rol</option>
                            <option value="admin">Administrador</option>
                            <option value="editor">Editor</option>
                            <option value="staff">Personal municipal</option>
                        </select>
                    </label>
                </div>

                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">Estado (opcional)</span>
                        <select
                            class="h-11 w-full rounded-lg border border-gray-300 bg-white px-4 text-sm text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-1 focus:ring-blue-600"
                            name="status">
                            <option value="active" selected>Activo</option>
                            <option value="inactive">Inactivo</option>
                        </select>
                    </label>
                </div>

                {{-- Botones --}}
                <div class="md:col-span-2 mt-4 flex items-center justify-end gap-3 border-t border-gray-200 pt-4">
                    <a href="{{ route('admin.usuarios.index') }}"
                       class="rounded-lg border border-gray-300 px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-100">
                        Cancelar
                    </a>

                    <button
                        type="submit"
                        class="rounded-lg bg-emerald-600 px-5 py-2 text-sm font-semibold text-white hover:bg-emerald-700">
                        Guardar usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
