<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

<div x-data="{ open: true }" class="flex min-h-screen bg-gray-100 dark:bg-gray-900">

    <!-- SIDEBAR -->
    <div :class="open ? 'w-64' : 'w-20'"
         class="bg-white dark:bg-gray-800 shadow-lg transition-all duration-300 overflow-hidden">

        <!-- Sidebar Content -->
        <div class="p-5">

            <!-- Title -->
            <h2 class="text-xl font-bold mb-6 text-gray-800 dark:text-white"
                x-show="open">
                My Dashboard
            </h2>

            <ul class="space-y-4 text-gray-700 dark:text-gray-200">

                <li>
                    <a href="/dashboard" class="hover:text-blue-500">
                        📊 <span x-show="open">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/tasks" class="hover:text-blue-500">
                        📝 <span x-show="open">Tasks</span>
                    </a>
                </li>

                <li>
                    <a href="/profile" class="hover:text-blue-500">
                        👤 <span x-show="open">Profile</span>
                    </a>
                </li>

                <li>
                    <a href="/produits" class="hover:text-blue-500">
                        🛒 <span x-show="open">Produits</span>
                    </a>
                </li>

                <li>
                    <a href="/contact" class="hover:text-blue-500">
                        📞 <span x-show="open">Contact</span>
                    </a>
                </li>

                <li>
                    <a href="/hello" class="hover:text-blue-500">
                        👋 <span x-show="open">Hello</span>
                    </a>
                </li>

                <li class="pt-4 border-t border-gray-300 dark:border-gray-600">
                    <a href="http://localhost:9000"
                       target="_blank"
                       class="text-red-500 hover:text-red-700">
                        📈 <span x-show="open">SonarQube</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="flex-1 flex flex-col">

        <!-- TOP NAV -->
        <div class="flex items-center justify-between bg-white dark:bg-gray-800 p-4 shadow">

            <!-- Toggle Button -->
            <button @click="open = !open"
                    class="text-2xl text-gray-700 dark:text-white">
                ☰
            </button>

            @include('layouts.navigation')

        </div>

        <!-- HEADER -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- PAGE CONTENT -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>

    </div>

</div>

</body>
</html>