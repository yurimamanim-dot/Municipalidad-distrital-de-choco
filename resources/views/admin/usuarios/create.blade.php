@extends('layouts.admin')

@section('title', 'Crear Nuevo Usuario')

@section('content')
    <div class="max-w-4xl mx-auto">
        {{-- Encabezado con botón de volver --}}
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">
                    Nuevo Usuario
                </h1>
                <p class="mt-1 text-sm text-gray-600">Registra un nuevo miembro del equipo municipal.</p>
            </div>
            
            <a href="{{ route('admin.usuarios.index') }}" 
               class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                ← Cancelar y volver
            </a>
        </div>

        {{-- Tarjeta del Formulario --}}
        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:p-8">
            
            {{-- Mostrar Errores de Validación (Feedback visual) --}}
            @if ($errors->any())
                <div class="mb-6 rounded-lg bg-red-50 p-4 text-sm text-red-800 border border-red-200">
                    <div class="font-bold mb-1">Por favor corrige los siguientes errores:</div>
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.usuarios.store') }}" method="POST" class="space-y-6">
                @csrf

                {{-- Sección 1: Datos Personales --}}
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    {{-- Nombre --}}
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Nombre Completo</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required placeholder="Ej: Juan Pérez"
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>

                    {{-- Correo --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Correo Institucional</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="usuario@muni.gob.pe"
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>

                    {{-- Rol (Selector Clave) --}}
                    <div>
                        <label for="role" class="mb-2 block text-sm font-medium text-gray-900">Rol y Permisos</label>
                        <select name="role" id="role" required
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                            <option value="personal" {{ old('role') == 'personal' ? 'selected' : '' }}>Personal Municipal (Editor)</option>
                            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Administrador (Control Total)</option>
                        </select>
                        <p class="mt-1 text-xs text-gray-500">
                            * Admin puede crear usuarios. Personal solo gestiona contenido.
                        </p>
                    </div>
                </div>

                <hr class="border-gray-100">

                {{-- Sección 2: Seguridad --}}
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label for="password" class="mb-2 block text-sm font-medium text-gray-900">Contraseña</label>
                        <input type="password" name="password" id="password" required
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>
                    <div>
                        <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-900">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>
                </div>

                {{-- Botón Guardar --}}
                <div class="flex items-center justify-end pt-4">
                    <button type="submit" 
                            class="inline-flex items-center gap-2 rounded-lg px-6 py-2.5 text-center text-sm font-medium text-white shadow-md hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                            style="background-color: #003366;">
                        <span class="material-symbols-outlined text-xl">save</span>
                        Guardar Usuario
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection