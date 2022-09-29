<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @vite('resources/js/app.js')
        @inertiaHead
        <style>
            @font-face {
                font-family: JetBrainsMono-Medium;
                src: url("{{asset('JetBrainsMono-Medium.ttf')}}");
            }

            .font-custom {
                font-family: "JetBrainsMono-Medium" !important;
            }

        </style>
    </head>
    <body class="font-custom antialiased @if(request()->routeIs('home'))overflow-hidden @endif">
        @inertia
    </body>
</html>
