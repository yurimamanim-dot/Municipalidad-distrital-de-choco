<header class="sticky top-0 z-50 w-full bg-white shadow-md">
  {{-- Barra superior (Contacto y Redes) --}}
  <div class="bg-primary text-white">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-1 text-xs md:px-10">
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-1.5">
          <span class="material-symbols-outlined text-sm">call</span>
          <span>(01) 123-4567</span>
        </div>
        <div class="hidden items-center gap-1.5 md:flex">
          <span class="material-symbols-outlined text-sm">mail</span>
          <span>informes@municipalidad.gob.pe</span>
        </div>
      </div>

      {{-- Redes Sociales (Solo Facebook) --}}
      <div class="flex items-center gap-3">
        <a aria-label="Facebook" class="text-white hover:text-secondary transition-colors" 
           href="https://www.facebook.com/MuniChoco" target="_blank">
          <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
          </svg>
        </a>
      </div>
    </div>
  </div>

  {{-- Barra principal (Navegación) --}}
  <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 md:px-10">
    
    {{-- Logo y Nombre --}}
    <div class="flex items-center gap-3">
      <img alt="Logo Municipalidad" class="h-12 w-10"
           src="{{ asset('img/logo-choco.png') }}">
      <h1 class="text-xl font-bold text-primary hidden sm:block">MUNICIPALIDAD DE CHOCO</h1>
    </div>

    {{-- Menú de Navegación --}}
    <nav class="hidden items-center gap-6 lg:flex">
      {{-- Inicio (Corregido route('inicio')) --}}
      <a href="{{ route('inicio') }}"
         class="text-sm font-medium
           {{ request()->routeIs('inicio') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
        Inicio
      </a>

      {{-- La Municipalidad --}}
      <a href="{{ route('la-municipalidad') }}"
         class="text-sm font-medium
           {{ request()->routeIs('la-municipalidad') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
        La Municipalidad
      </a>

      {{-- Noticias (Nuevo) --}}
      <a href="{{ route('noticias.index') }}"
         class="text-sm font-medium
           {{ request()->routeIs('noticias.*') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
        Noticias
      </a>

      {{-- Portal / Login --}}
      @auth
        <a href="{{ route('dashboard') }}"
           class="text-sm font-medium text-gray-600 hover:text-secondary">
          Portal Admin
        </a>
      @else
        <a href="{{ route('login') }}"
           class="text-sm font-medium text-gray-600 hover:text-secondary">
          Portal
        </a>
      @endauth
    </nav>

    {{-- Botones de Acción --}}
    <div class="flex items-center gap-4">
      {{-- Botón Mesa de Partes --}}
      <a href="{{ route('mesa') }}"
         class="flex min-w-[84px] items-center justify-center rounded-full h-10 px-6 bg-secondary text-white text-sm font-bold tracking-wide transition-transform hover:scale-105 shadow-sm">
        <span class="truncate">Mesa de Partes</span>
      </a>

      {{-- Botón Menú Móvil (Solo visible en celulares) --}}
      <button class="p-2 text-primary lg:hidden">
        <span class="material-symbols-outlined text-3xl">menu</span>
      </button>
    </div>
  </div>
</header>