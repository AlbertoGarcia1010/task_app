<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow mb-6">
        <div class="container mx-auto px-4 py-4 flex justify-between">
            <a href="/" class="text-xl font-bold text-blue-600">TaskApp</a>
        </div>
    </nav>

    {{-- Contenido principal --}}
    <main class="container mx-auto px-4">
        @yield('content')
    </main>

</body>
</html>
