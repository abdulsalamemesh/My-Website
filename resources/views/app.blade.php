<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body class="font-custom antialiased">
@inertia
</body>
</html>
