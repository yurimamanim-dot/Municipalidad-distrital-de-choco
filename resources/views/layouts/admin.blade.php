<!DOCTYPE html>
<html lang="es" class="h-full">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Admin')</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
  <script>
    tailwind.config = { theme:{ extend:{ colors:{ primary:'#0B2C4A', accent:'#0E5BA9' }, fontFamily:{ display:['Poppins','sans-serif'] } } } }
  </script>
</head>
<body class="h-full bg-gray-50 font-display" x-data="{ open:false }" x-cloak>
  <div class="min-h-screen flex">
    @include('partials.admin.sidebar')
    <div class="flex-1 md:ml-64">
      @include('partials.admin.topbar')
      <main class="p-4 sm:p-6 lg:p-8">@yield('content')</main>
    </div>
  </div>
  <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
