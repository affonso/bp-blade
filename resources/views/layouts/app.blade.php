<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <style>
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <div class="flex h-screen overflow-hidden">
        <!-- Overlay para mobile -->
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden hidden"></div>

        <!-- Sidebar -->
        @include('components.dashboard.sidebar')

        <!-- Área de Conteúdo -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header Mobile -->
            @include('components.dashboard.mobile-header')

            <!-- Conteúdo Principal -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 dark:bg-gray-900 p-6">
                <div class="max-w-7xl mx-auto">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @include('components.dashboard.scripts')
    @stack('scripts')
</body>
</html>
