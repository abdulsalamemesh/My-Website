<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" style="border-radius: 50%" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" style="border-radius: 50%" sizes="192x192"  href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" style="border-radius: 50%" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" style="border-radius: 50%" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" style="border-radius: 50%" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <script>
        function UnCryptMailto(s) {
            var n=0;
            var r="";
            for(var i=0; i < s.length; i++) {
                n=s.charCodeAt(i);
                if (n>=8364) {n = 128;}
                r += String.fromCharCode(n-(1));
            }
            return r;
        }
        function linkTo_UnCryptMailto(s)	{
            location.href=UnCryptMailto(s);
        }
    </script>
    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>
<body class="antialiased">
@inertia
</body>
</html>
