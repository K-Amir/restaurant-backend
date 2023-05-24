<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-dark.svg') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Alpine.js --}}
        @vite('resources/js/app.js')

        {{-- TailwindCSS para los estilos --}}
        @vite('resources/css/app.css')

        {{-- CSS de Livewire --}}
        @livewireStyles
    </head>
    <body class="bg-dark-1 font-sans antialiased ">
        <div class="flex min-h-screen">
            
            <div class="bg-dark-3 w-[25vw] min-h-screen pt-20 text-center">
            @yield('menu')
            </div>

            <!-- Page Content -->
            <main class="w-[75vw] pt-10 pl-10 text-light-3" >
            @yield('content')

            {{-- JavaScript de Livewire --}}
            @livewireScripts
            </main>
        </div>
    </body>
</html>
