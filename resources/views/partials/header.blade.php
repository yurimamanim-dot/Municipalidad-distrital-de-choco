<header x-data="{ open: false }" class="sticky top-0 z-50 w-full bg-white shadow-md">
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
           href="https://www.facebook.com/Choco.municipalidad" target="_blank">
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
    




<div class="flex items-center gap-3">
    {{-- Logo Municipalidad --}}
    <img
        src="https://img.icons8.com/?size=100&id=9887&format=png"
        alt="Logo Municipalidad Distrital de Choco"
        class="h-12 w-12 md:h-14 md:w-14 rounded-full object-cover bg-white border border-primary"
    >

    {{-- Nombre de la municipalidad --}}
    <div class="flex flex-col leading-tight">
        <span class="text-sm md:text-base font-semibold text-primary uppercase tracking-tight">
            Municipalidad Distrital de
        </span>
        <span class="text-xl md:text-2xl font-extrabold text-primary tracking-tight uppercase">
            Choco
        </span>
    </div>
</div>


    {{-- Menú de Navegación (Desktop) --}}
    <nav class="hidden items-center gap-6 lg:flex">
      {{-- Inicio --}}
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

      {{-- Noticias --}}
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

    {{-- Botones de Acción + botón menú móvil --}}
    <div class="flex items-center gap-4">
      {{-- Botón Mesa de Partes --}}
      <a href="{{ route('mesa') }}"
         class="flex min-w-[84px] items-center justify-center rounded-full h-10 px-6 bg-secondary text-white text-sm font-bold tracking-wide transition-transform hover:scale-105 shadow-sm">
        <span class="truncate">Mesa de Partes</span>
      </a>

      {{-- Botón Menú Móvil --}}
      <button
        type="button"
        class="p-2 text-primary lg:hidden"
        @click="open = !open"
      >
        <span class="sr-only">Abrir menú</span>
        <span class="material-symbols-outlined text-3xl" x-show="!open" x-cloak>menu</span>
        <span class="material-symbols-outlined text-3xl" x-show="open" x-cloak>close</span>
      </button>
    </div>
  </div>

  {{-- Menú móvil desplegable --}}
  <nav
    class="border-t border-gray-100 bg-white lg:hidden"
    x-show="open"
    x-transition.origin.top
    x-cloak
  >
    <div class="mx-auto max-w-7xl px-4 py-3 flex flex-col gap-1">
      <a href="{{ route('inicio') }}"
         class="block rounded-md px-3 py-2 text-sm font-medium
           {{ request()->routeIs('inicio') ? 'bg-gray-100 text-primary font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
        Inicio
      </a>

      <a href="{{ route('la-municipalidad') }}"
         class="block rounded-md px-3 py-2 text-sm font-medium
           {{ request()->routeIs('la-municipalidad') ? 'bg-gray-100 text-primary font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
        La Municipalidad
      </a>

      <a href="{{ route('noticias.index') }}"
         class="block rounded-md px-3 py-2 text-sm font-medium
           {{ request()->routeIs('noticias.*') ? 'bg-gray-100 text-primary font-semibold' : 'text-gray-700 hover:bg-gray-50' }}">
        Noticias
      </a>

      @auth
        <a href="{{ route('dashboard') }}"
           class="block rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
          Portal Admin
        </a>
      @else
        <a href="{{ route('login') }}"
           class="block rounded-md px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
          Portal
        </a>
      @endauth

      <a href="{{ route('mesa') }}"
         class="mt-2 inline-flex items-center justify-center gap-2 rounded-md bg-secondary px-3 py-2 text-sm font-semibold text-white hover:bg-green-700">
        <span class="material-symbols-outlined text-base">draft</span>
        Mesa de Partes
      </a>
    </div>
  </nav>
</header>
