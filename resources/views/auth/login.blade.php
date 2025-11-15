<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md px-4">

            {{-- Logo redondo --}}
            <div class="flex justify-center mb-6">
                <div class="flex items-center justify-center w-20 h-20 rounded-full"
                     style="background-color:#1976D2;">
                    <span class="material-symbols-outlined text-white text-4xl">
                        account_balance
                    </span>
                </div>
            </div>

            {{-- Títulos --}}
            <div class="text-center mb-8">
                <h1 class="text-3xl font-extrabold text-gray-900 leading-tight"
                    style='font-family:"Poppins",sans-serif;'>
                    Portal de<br>Administración
                </h1>
                <p class="mt-3 text-sm text-gray-500">
                    Inicie sesión para acceder al panel
                </p>
            </div>

            {{-- Mensajes de sesión (opcional) --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- Tarjeta de login --}}
            <div class="bg-white rounded-2xl shadow-md p-8 space-y-6">

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    {{-- Email / Usuario --}}
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Nombre de Usuario o Correo Electrónico
                        </label>

                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-xl">
                                person
                            </span>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Ingrese su usuario o correo"
                                class="block w-full rounded-lg border border-gray-300 bg-white
                                       py-3 pl-11 pr-3 text-sm text-gray-900 placeholder-gray-400
                                       focus:border-blue-600 focus:ring-2 focus:ring-blue-600"
                            >
                        </div>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Password --}}
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Contraseña
                        </label>

                        <div class="relative">
                            <span
                                class="material-symbols-outlined absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 text-xl">
                                lock
                            </span>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                required
                                autocomplete="current-password"
                                placeholder="Ingrese su contraseña"
                                class="block w-full rounded-lg border border-gray-300 bg-white
                                       py-3 pl-11 pr-3 text-sm text-gray-900 placeholder-gray-400
                                       focus:border-blue-600 focus:ring-2 focus:ring-blue-600"
                            >
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Recordarme + Olvidó contraseña --}}
                    <div class="flex items-center justify-between gap-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                   class="rounded border-gray-300 text-blue-600 shadow-sm
                                          focus:border-blue-600 focus:ring-blue-600"
                                   name="remember">
                            <span class="ml-2 text-sm text-gray-600">Recordarme</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-700 hover:text-blue-900 font-medium underline whitespace-nowrap"
                               href="{{ route('password.request') }}">
                                ¿Olvidó su contraseña?
                            </a>
                        @endif
                    </div>

                    {{-- Botón --}}
                    <div class="pt-1">
                        <button type="submit"
                                class="inline-flex w-full justify-center rounded-full border border-transparent
                                       px-4 py-3 text-sm font-semibold text-white
                                       focus:outline-none focus:ring-2 focus:ring-offset-2"
                                style="background-color:#43A047; --tw-ring-color:#43A047;">
                            Iniciar Sesión
                        </button>
                    </div>
                </form>
            </div>

            {{-- Footer --}}
            <p class="mt-6 text-center text-xs text-gray-500">
                © {{ now()->year }} Gobierno Municipal. Todos los derechos reservados.
            </p>
        </div>
    </div>
</x-guest-layout>
