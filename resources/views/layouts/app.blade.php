<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PescaRob</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">
    <header>
        <nav class="bg-blue-700 text-white px-6 py-4 flex justify-between items-center">
            <div class="text-xl font-bold">
                PescaRob
            </div>
        </nav>
    </header>

    <main class="flex-grow container mx-auto px-4 py-6">
        @yield('content')
    </main>

    <footer class="bg-blue-700 text-white text-center p-4">
        &copy; {{ date('Y') }} PescaRob
    </footer>

    @livewireScripts

    @stack('scripts')
</body>

</html>
