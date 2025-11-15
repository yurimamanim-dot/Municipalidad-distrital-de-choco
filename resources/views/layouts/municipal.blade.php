<!DOCTYPE html>
<html lang="es" class="light">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Municipalidad Distrital de Choco</title>

  {{-- Tailwind --}}
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

  {{-- Poppins --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  {{-- Material Symbols --}}
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          fontFamily: {
            sans: ['Poppins', 'system-ui', 'sans-serif'],
          },
          colors: {
            primary: '#003366',
            secondary: '#43A047',
          },
        },
      },
    }
  </script>
</head>

<body class="bg-gray-50 text-gray-900 antialiased">

  {{-- HEADER MUNICIPAL (tu código) --}}
  <header class="sticky top-0 z-50 w-full bg-white shadow-md">
    {{-- Barra superior --}}
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

        <div class="flex items-center gap-3">
          <a aria-label="Facebook" class="text-white hover:text-secondary transition-colors" href="#">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
            </svg>
          </a>
          <a aria-label="Twitter" class="text-white hover:text-secondary transition-colors" href="#">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.71v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
              </path>
            </svg>
          </a>
          <a aria-label="YouTube" class="text-white hover:text-secondary transition-colors" href="#">
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.78 22 12 22 12s0 3.22-.42 4.814a2.506 2.506 0 0 1-1.768 1.768c-1.594.42-7.812.42-7.812.42s-6.218 0-7.812-.42a2.506 2.506 0 0 1-1.768-1.768C2 15.22 2 12 2 12s0-3.22.42-4.814a2.506 2.506 0 0 1 1.768-1.768C5.782 5 12 5 12 5s6.218 0 7.812.418ZM15.194 12 10 15V9l5.194 3Z" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    {{-- Barra principal --}}
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 md:px-10">
      <div class="flex items-center gap-3">
        <img alt="Logo Municipalidad" class="h-12 w-10" src="{{ asset('img/logo-choco.png') }}">
        <h1 class="text-xl font-bold text-primary">MUNICIPALIDAD DE CHOCO</h1>
      </div>

      <nav class="hidden items-center gap-6 lg:flex">
        <a href="{{ route('home') }}" class="text-sm font-medium
               {{ request()->routeIs('home') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
          Inicio
        </a>

        <a href="{{ route('la-municipalidad') }}"
          class="text-sm font-medium
               {{ request()->routeIs('la-municipalidad') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
          La Municipalidad
        </a>

        <a class="text-sm font-medium text-gray-600 hover:text-secondary" href="#">Servicios</a>
        <a class="text-sm font-medium text-gray-600 hover:text-secondary" href="#">Trámites</a>
        <a class="text-sm font-medium text-gray-600 hover:text-secondary" href="#">Transparencia</a>

        {{-- Portal (Breeze) --}}
        @auth
          <a href="{{ route('dashboard') }}"
            class="text-sm font-medium
                   {{ request()->routeIs('dashboard') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
            Portal
          </a>
        @else
          <a href="{{ route('login') }}"
            class="text-sm font-medium
                   {{ request()->routeIs('login') ? 'text-primary font-semibold' : 'text-gray-600 hover:text-secondary' }}">
            Portal
          </a>
        @endauth
      </nav>

      <div class="flex items-center gap-4">
        <button class="hidden md:flex items-center justify-center rounded-full p-2 text-gray-500 hover:bg-gray-100">
          <span class="material-symbols-outlined">search</span>
        </button>
        <a href="{{ route('mesa') }}"
          class="flex min-w-[84px] items-center justify-center rounded-full h-10 px-6 bg-secondary text-white text-sm font-bold tracking-wide transition-transform hover:scale-105">
          <span class="truncate">Mesa de Partes</span>
        </a>
        <button class="p-2 text-primary lg:hidden">
          <span class="material-symbols-outlined text-3xl">menu</span>
        </button>
      </div>
    </div>
  </header>

  {{-- CONTENIDO --}}
  <main class="min-h-[60vh]">
    @yield('content')
  </main>

  {{-- FOOTER MUNICIPAL (tu código) --}}
  <footer class="w-full bg-primary text-white">
    <div class="mx-auto max-w-7xl px-4 py-10 md:px-10">
      <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
        <div class="col-span-1 lg:col-span-2">
          <div class="mb-4 flex items-center gap-4 text-white">
            <img alt="Logo Municipalidad" class="h-14 w-12" src="{{ asset('img/logo-choco.png') }}" />
            <h2 class="text-xl font-bold leading-tight">MUNICIPALIDAD DISTRITAL DE CHOCO</h2>
          </div>
          <p class="text-sm text-gray-300">Comprometidos con el desarrollo y bienestar de nuestra comunidad.</p>
        </div>

        <div>
          <h3 class="mb-4 text-lg font-bold">Enlaces Rápidos</h3>
          <ul class="space-y-2 text-sm text-gray-300">
            <li><a class="hover:text-secondary" href="#">La Municipalidad</a></li>
            <li><a class="hover:text-secondary" href="#">Servicios en Línea</a></li>
            <li><a class="hover:text-secondary" href="#">Portal de Transparencia</a></li>
            <li><a class="hover:text-secondary" href="#">Noticias y Eventos</a></li>
          </ul>
        </div>

        <div>
          <h3 class="mb-4 text-lg font-bold">Contacto</h3>
          <ul class="space-y-2 text-sm text-gray-300">
            <li class="flex items-start gap-2">
              <span class="material-symbols-outlined mt-0.5 text-base">location_on</span>
              <span>Choco, Choco, Castilla</span>
            </li>
            <li class="flex items-center gap-2">
              <span class="material-symbols-outlined text-base">call</span>
              <span>Central: (01) 123-4567</span>
            </li>
            <li class="flex items-center gap-2">
              <span class="material-symbols-outlined text-base">mail</span>
              <span>informes@municipalidad.gob.pe</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="mt-8 border-t border-blue-800 pt-6 text-center text-sm text-gray-200">
        <p>© 2025 Municipalidad Distrital de Choco. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

</body>

</html>