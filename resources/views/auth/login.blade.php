<x-guest-layout>
    <div class="min-h-screen w-full flex flex-col items-center justify-center px-4"
         style="background-color:#f4f4f4; font-family:'Open Sans',sans-serif;">

        <main class="w-full max-w-md">
            {{-- Logo + título --}}
            <div class="mb-6 flex flex-col items-center text-center">
                <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-full"
                     style="background-color:#1976D2;">
                    <span class="material-symbols-outlined text-5xl text-white">
                        account_balance
                    </span>
                </div>
                <h1 class="text-3xl font-black text-[#131613] leading-tight"
                    style='font-family:"Poppins",sans-serif;'>
                    Portal de Administración
                </h1>
                <p class="mt-2 text-base text-[#6c7f6d]">
                    Inicie sesión para acceder al panel
                </p>
            </div>

            {{-- Mensaje de error de credenciales --}}
            @if ($errors->any())
                <div class="mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    <p class="font-semibold">No se pudo iniciar sesión.</p>
                    <p>Verifique su correo electrónico y contraseña e inténtelo nuevamente.</p>
                </div>
            @endif

            {{-- Mensaje de estado (por ejemplo, después de resetear contraseña) --}}
            <x-auth-session-status class="mb-4" :status="session('status')" />

            {{-- Tarjeta de login --}}
            <div class="flex flex-col gap-6 rounded-2xl bg-white p-8 shadow-sm">
                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
                    @csrf

                    {{-- Email / usuario --}}
                    <div class="flex flex-col">
                        <label for="email"
                               class="mb-1.5 text-sm font-medium text-[#131613]">
                            Nombre de Usuario o Correo Electrónico
                        </label>

                        <div class="relative mt-1 login-input-wrapper">
                            {{-- Icono izquierda --}}
                            <span class="material-symbols-outlined login-icon-left">
                                person
                            </span>

                            <input
                                id="email"
                                name="email"
                                type="email"
                                value="{{ old('email') }}"
                                required
                                autofocus
                                autocomplete="username"
                                placeholder="Ingrese su usuario o correo"
                                class="login-input"
                            />
                        </div>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    {{-- Contraseña --}}
                    <div class="flex flex-col">
                        <label for="password"
                               class="mb-1.5 text-sm font-medium text-[#131613]">
                            Contraseña
                        </label>

                        <div class="relative mt-1 login-input-wrapper">
                            {{-- Icono izquierda --}}
                            <span class="material-symbols-outlined login-icon-left">
                                lock
                            </span>

                            <input
                                id="password"
                                name="password"
                                type="password"
                                required
                                autocomplete="current-password"
                                placeholder="Ingrese su contraseña"
                                class="login-input"
                            />

                            {{-- Ojito --}}
                            <button
                                type="button"
                                aria-label="Mostrar u ocultar contraseña"
                                class="login-icon-right">
                                <span class="material-symbols-outlined">
                                    visibility
                                </span>
                            </button>
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Recordarme + Olvidó contraseña --}}
                    <div class="flex items-center justify-between text-sm mt-1">
                        <label for="remember_me" class="inline-flex items-center gap-2">
                            <input id="remember_me" type="checkbox" name="remember"
                                   class="rounded border-gray-300 text-[#1976D2] shadow-sm
                                          focus:border-[#1976D2] focus:ring-[#1976D2]">
                            <span class="text-gray-600">Recordarme</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                               class="text-[#1976D2] hover:text-[#12519A] underline">
                                ¿Olvidó su contraseña?
                            </a>
                        @endif
                    </div>

                    {{-- Botón --}}
                    <button
                        type="submit"
                        class="mt-3 flex h-14 w-full items-center justify-center rounded-lg
                               px-6 text-base font-bold leading-normal text-white
                               transition-colors duration-200"
                        style="background-color:#43A047;">
                        Iniciar Sesión
                    </button>
                </form>
            </div>

            {{-- Footer --}}
            <p class="mt-8 text-center text-xs text-gray-500">
                © {{ now()->year }} Gobierno Municipal. Todos los derechos reservados.
            </p>
        </main>
    </div>

    {{-- Estilos específicos para alinear iconos y texto --}}
    <style>
        .login-input-wrapper {
            position: relative;
        }

        .login-input {
            width: 100%;
            border-radius: 0.5rem; /* rounded-lg */
            border: 1px solid #dee3de;
            background-color: #ffffff;
            padding: 0.75rem 3rem;  /* arriba/abajo, derecha/izquierda base */
            padding-left: 3rem;    /* más espacio para el icono izquierdo */
            padding-right: 3rem;   /* más espacio para el ojo */
            font-size: 0.875rem;
            color: #131613;
        }

        .login-input::placeholder {
            color: #9ca3af;
        }

        .login-input:focus {
            outline: none;
            border-color: #1976D2;
            box-shadow: 0 0 0 2px rgba(25, 118, 210, 0.25);
        }

        .login-icon-left {
            position: absolute;
            left: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.25rem;
            color: #9ca3af;
            pointer-events: none;
        }

        .login-icon-right {
            position: absolute;
            right: 0.75rem;
            top: 50%;
            transform: translateY(-50%);
            border: none;
            background: transparent;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c7f6d;
            cursor: pointer;
        }

        .login-icon-right .material-symbols-outlined {
            font-size: 1.25rem;
        }
    </style>
</x-guest-layout>
