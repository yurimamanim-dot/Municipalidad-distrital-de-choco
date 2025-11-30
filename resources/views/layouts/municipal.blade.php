<!DOCTYPE html>
<html lang="es" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Municipalidad Distrital de Choco')</title>

    {{-- 1. RESTAURADO: Tailwind via CDN + Tu Configuración de Colores --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        primary: '#003366',  // Azul Institucional
                        secondary: '#43A047', // Verde Acento
                    },
                },
            },
        }
    </script>

    {{-- 2. Fuentes y Iconos --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />

    {{-- Estilos base opcionales --}}
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 antialiased flex flex-col min-h-screen">

    {{-- 3. Header Modular (Carga el archivo partials/header.blade.php) --}}
    @include('partials.header')
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- 4. Contenido Principal (Aquí se inyecta el inicio, noticias, etc) --}}
    <main class="flex-grow">
        @yield('content')
    </main>

    {{-- 5. Footer Modular (Carga el archivo partials/footer.blade.php) --}}
    @include('partials.footer')


</body>

</html>