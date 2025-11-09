<!DOCTYPE html>
<html class="light" lang="es">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title','Municipalidad - Página de Inicio')</title>

  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

  <script>
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            primary: "#003366",
            secondary: "#00AEEF",
            "light-gray": "#F4F4F4",
            "background-light": "#FFFFFF",
            "background-dark": "#101622",
          },
          fontFamily: { display: ["Poppins", "sans-serif"] },
        },
      },
    }
  </script>
  <style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 600, 'GRAD' 0, 'opsz' 27; font-size: 50px;
    }
    .hero-bg {
      background-image: url("/img/hero-choco.jpg");
    }
  </style>
    <style>
    .hero-bg { background-image: url("/img/hero-choco.jpg"); }
    @media (max-width: 640px) {
    .hero-bg { background-image: url("/img/hero-choco-1600x1800.jpg"); }
    }
    </style>
  @stack('head')
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-[#111318] dark:text-white">
  <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
    <div class="layout-container flex h-full grow flex-col">
      @include('partials.header')
      <main class="flex-1">@yield('content')</main>
      @include('partials.footer')
    </div>
  </div>
  @stack('scripts')
</body>
</html>
