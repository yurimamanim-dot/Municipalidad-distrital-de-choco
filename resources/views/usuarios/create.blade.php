<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        {{-- Encabezado --}}
        <div class="mb-8 flex flex-wrap justify-between gap-3">
            <div>
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">
                    Crear nuevo usuario
                </h1>
                <p class="text-sm text-gray-600">
                    Completa los datos para registrar un nuevo usuario en el sistema.
                </p>
            </div>
        </div>

        {{-- Errores --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-800">
                <ul class="list-disc pl-5 space-y-1">
                    @foreach ($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <div class="rounded-lg border border-gray-200 bg-white p-6 md:p-8 shadow-sm">
            <form
                action="{{ route('usuarios.store') }}"
                method="POST"
                class="grid grid-cols-1 gap-x-6 gap-y-6 md:grid-cols-2"
            >
                @csrf

                {{-- Nombre completo --}}
                <div class="md:col-span-2">
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Nombre completo
                        </span>
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-input h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                            placeholder="Ej: Juan Pérez"
                        />
                    </label>
                </div>

                {{-- Correo --}}
                <div class="md:col-span-2">
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Correo electrónico
                        </span>
                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="form-input h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                            placeholder="Ej: juan.perez@email.com"
                        />
                    </label>
                </div>

                {{-- Contraseña --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Contraseña
                        </span>
                        <input
                            type="password"
                            name="password"
                            class="form-input h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                            placeholder="••••••••"
                        />
                    </label>
                </div>

                {{-- Confirmar contraseña --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Confirmar contraseña
                        </span>
                        <input
                            type="password"
                            name="password_confirmation"
                            class="form-input h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 placeholder:text-gray-400 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                            placeholder="••••••••"
                        />
                    </label>
                </div>

                {{-- Rol (solo visual por ahora) --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Rol del usuario
                        </span>
                        <select
                            class="form-select h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                        >
                            <option selected disabled>Selecciona un rol (decorativo)</option>
                            <option>Administrador</option>
                            <option>Editor</option>
                            <option>Personal municipal</option>
                            <option>Ciudadano</option>
                        </select>
                    </label>
                </div>

                {{-- Estado (decorativo también) --}}
                <div>
                    <label class="flex flex-col">
                        <span class="pb-2 text-sm font-medium text-gray-700">
                            Estado
                        </span>
                        <select
                            class="form-select h-12 rounded-md border border-gray-300 bg-white px-4 text-base text-gray-900 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/40"
                        >
                            <option value="active" selected>Activo</option>
                            <option value="inactive">Inactivo</option>
                        </select>
                    </label>
                </div>

                {{-- Botones --}}
                <div class="md:col-span-2 mt-4 border-t border-gray-200 pt-4 flex justify-end gap-4">
                    <a href="{{ route('usuarios.index') }}"
                       class="px-5 py-2.5 rounded-md text-sm font-semibold bg-gray-100 text-gray-700 hover:bg-gray-200">
                        Cancelar
                    </a>

                    <button
                        type="submit"
                        class="px-5 py-2.5 rounded-md text-sm font-semibold bg-emerald-600 text-white hover:bg-emerald-700">
                        Guardar usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
