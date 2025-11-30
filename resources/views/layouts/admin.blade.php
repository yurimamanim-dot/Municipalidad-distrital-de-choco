<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Admin')</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary:'#0B2C4A',
            accent:'#0E5BA9',
          },
          fontFamily: {
            display:['Poppins','sans-serif'],
          },
        },
      },
    }
  </script>

  <style>
      body { font-family: 'Poppins', sans-serif; }
      [x-cloak] { display: none !important; }
  </style>
</head>
<body class="h-full bg-gray-50 font-display" x-data="{ open:false }">

  <div class="min-h-screen flex">

    {{-- SIDEBAR (usa la variable "open") --}}
    @include('partials.admin.sidebar')

    {{-- OVERLAY PARA MÓVIL --}}
    <div
        class="fixed inset-0 z-30 bg-black/40 md:hidden"
        x-show="open"
        x-transition.opacity
        x-cloak
        @click="open = false"
    ></div>

    {{-- CONTENIDO --}}
    <div class="flex-1 flex flex-col min-h-screen md:ml-64">

      {{-- TOPBAR (el botón menú debería tener @click="open = !open") --}}
      @include('partials.admin.topbar')

      <main class="flex-1 w-full">
        <div class="mx-auto w-full max-w-6xl p-4 sm:p-6 lg:p-8">
          @yield('content')
        </div>
      </main>
    </div>
  </div>

  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
