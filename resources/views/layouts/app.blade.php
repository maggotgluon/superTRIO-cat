<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('favicon-32.png')}}" type="image/x-icon">
        <title>{{ config('app.name', 'SuperTRIO') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @wireUiScripts

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans text-gray-900 antialiased">

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full min-h-[95vh]  sm:max-w-screen-lg mt-2 px-2 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                @yield('content')
                @isset($slot)
                    {{ $slot }}
                @endisset
            </div>
        </div>
        @livewireScripts
    </body>
</html>
