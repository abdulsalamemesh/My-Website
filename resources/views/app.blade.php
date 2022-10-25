<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="font-custom antialiased">
@inertia
</body>
<!--this class are here to be processed form the jit-->
<span class="w-[50%] w-[60%] w-[70%] w-[80%] w-[90%] w-[100%] w-[40%] w-[30%] hidden"></span>
</html>
