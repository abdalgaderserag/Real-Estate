<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-gray-100">

        {{-- <nav class="bg-white border-b border-gray-100">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div>Real states</div>
                    <div class="flex px-4 sm:px-6 lg:px-8">
                        <a href="{{ route('profile.show') }}"><div class="px-1">name</div></a>
                        <a href="{{ route('profile.show') }}"><div class="px-1">logout</div></a>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16"></div>
                </div>
            </div>
        </nav> --}}

        <nav class="flex justify-between items-center bg-orange-500 text-white text-lg">
            <div class="flex-auto ml-3">
                <img onclick="window.location.href='{{ route('estate.index') }}'" class="w-20 cursor-pointer" src="{{ url('/images/ink.png') }}">
            </div>
            <div class="flex items-center">
                <div onclick="window.location.href='{{ route('estate.create') }}'" class="p-1 pb-2 px-6 mx-8 border-2 border-white rounded-lg hover:bg-orange-400 hover:cursor-pointer">+ Add Property</div>
                <div onclick="window.location.href='{{ route('profile.show') }}'" class="px-3 hover:cursor-pointer">name</div>
            </div>
        </nav>



        {{ $slot }}

        @livewireScripts
    </body>
</html>
