@extends('layouts.admin')

@section('title', 'Editar Usuario')

@section('content')
    <div class="max-w-4xl mx-auto">
        {{-- Encabezado --}}
        <div class="mb-6 flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-extrabold text-gray-900">
                    Editar Usuario
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Actualizando datos de: <span class="font-bold text-blue-900">{{ $usuario->name }}</span>
                </p>
            </div>
            
            <a href="{{ route('admin.usuarios.index') }}" 
               class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
                ← Volver al listado
            </a>
        </div>

        <div class="rounded-xl border border-gray-200 bg-white p-6 shadow-sm md:p-8">
            
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

            {{-- FORMULARIO DE EDICIÓN --}}
            <form action="{{ route('admin.usuarios.update', $usuario) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT') {{-- Importante para que Laravel sepa que es una actualización --}}

                {{-- Sección 1: Datos Personales --}}
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    {{-- Nombre --}}
                    <div class="col-span-1 md:col-span-2">
                        <label for="name" class="mb-2 block text-sm font-medium text-gray-900">Nombre Completo</label>
                        <input type="text" name="name" id="name" 
                               value="{{ old('name', $usuario->name) }}" required 
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>

                    {{-- Correo --}}
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-gray-900">Correo Institucional</label>
                        <input type="email" name="email" id="email" 
                               value="{{ old('email', $usuario->email) }}" required 
                               class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                    </div>

                    {{-- Rol --}}
                    <div>
                        <label for="role" class="mb-2 block text-sm font-medium text-gray-900">Rol y Permisos</label>
                        <select name="role" id="role" required
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                            <option value="personal" {{ old('role', $usuario->role) == 'personal' ? 'selected' : '' }}>
                                Personal Municipal (Editor)
                            </option>
                            <option value="admin" {{ old('role', $usuario->role) == 'admin' ? 'selected' : '' }}>
                                Administrador (Control Total)
                            </option>
                        </select>
                    </div>
                </div>

                <hr class="border-gray-100">

                {{-- Sección 2: Cambio de Contraseña (Opcional) --}}
                <div class="rounded-lg bg-blue-50 p-4 border border-blue-100">
                    <h3 class="font-bold text-blue-900 text-sm mb-2">¿Cambiar contraseña?</h3>
                    <p class="text-xs text-blue-700 mb-4">
                        Deja estos campos en blanco si quieres mantener la contraseña actual. Solo llénalos si deseas cambiarla.
                    </p>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <label for="password" class="mb-2 block text-sm font-medium text-gray-900">Nueva Contraseña</label>
                            <input type="password" name="password" id="password"
                                   class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                        </div>
                        <div>
                            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-gray-900">Confirmar Nueva Contraseña</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="block w-full rounded-lg border border-gray-300 bg-white p-2.5 text-gray-900 focus:border-blue-900 focus:ring-blue-900">
                        </div>
                    </div>
                </div>

                {{-- Botones de Acción --}}
                <div class="flex items-center justify-end gap-3 pt-4">
                    {{-- Botón Cancelar --}}
                    <a href="{{ route('admin.usuarios.index') }}"
                       class="rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-4 focus:ring-gray-200">
                        Cancelar
                    </a>

                    {{-- Botón Guardar Cambios --}}
                    <button type="submit" 
                            class="inline-flex items-center gap-2 rounded-lg px-6 py-2.5 text-center text-sm font-medium text-white shadow-md hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
                            style="background-color: #003366;">
                        <span class="material-symbols-outlined text-xl">save</span>
                        Guardar Cambios
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection