<aside x-data="{ open: true }"
    class="w-64 bg-white border-r fixed inset-y-0 left-0 z-40 transform transition-transform md:translate-x-0"
    :class="open ? 'translate-x-0' : '-translate-x-full md:translate-x-0'">
    @php
        // Helper para marcar el enlace activo
        $navActive = function (string $pattern) {
            return request()->routeIs($pattern)
                ? 'bg-primary text-white'
                : 'text-gray-700 hover:bg-gray-100';
        };
    @endphp

    {{-- Header del panel --}}
    <div class="h-16 flex items-center gap-3 px-4 border-b">
        <span class="material-symbols-outlined text-primary">apartment</span>
        <div>
            <p class="text-xs text-gray-500">Admin Portal</p>
            <p class="font-bold text-gray-800">Municipalidad</p>
        </div>
    </div>

    {{-- Navegación --}}
    <nav class="p-3 space-y-1">
        {{-- Dashboard --}}
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $navActive('admin.dashboard') }}">
            <span class="material-symbols-outlined">dashboard</span>
            <span>Dashboard</span>
        </a>

        {{-- Noticias --}}
        <a href="{{ route('admin.noticias.index') }}"
            class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $navActive('admin.noticias.*') }}">
            <span class="material-symbols-outlined">newsmode</span>
            <span>Noticias</span>
        </a>

        {{-- Mesa de Partes (FALTABA ESTO) --}}
        <a href="{{ route('admin.tramites.index') }}"
           class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $navActive('admin.tramites.*') }}">
            <span class="material-symbols-outlined">description</span>
            <span>Mesa de Partes</span>
        </a>

        {{-- Usuarios (SOLO ADMIN) --}}
        @if(auth()->user()->isAdmin())
            <a href="{{ route('admin.usuarios.index') }}"
                class="flex items-center gap-3 px-3 py-2 rounded-lg {{ $navActive('admin.usuarios.*') }}">
                <span class="material-symbols-outlined">group</span>
                <span>Usuarios</span>
            </a>
        @endif
    </nav>

    {{-- Zona inferior: sesión / logout --}}
    <div class="mt-auto p-3 border-t">
        <div class="px-3 py-2 rounded-lg bg-gray-50">
            <p class="text-xs text-gray-500">Sesión</p>
            <p class="text-sm font-semibold truncate">
                {{ auth()->user()->name ?? 'Operador' }}
            </p>

            <form method="POST" action="{{ route('logout') }}" class="mt-2">
                @csrf
                <button class="w-full flex items-center justify-center gap-2 px-3 py-2 text-sm rounded-lg
                           bg-red-50 text-red-700 hover:bg-red-100">
                    <span class="material-symbols-outlined">logout</span>
                    <span>Cerrar sesión</span>
                </button>
            </form>
        </div>
    </div>
</aside>