<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Maintsol</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="signInStyle.css">
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
   

       
            @yield('content')
        
  
</body>
</html>
