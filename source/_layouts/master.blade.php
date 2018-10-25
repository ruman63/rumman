<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">     
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display" rel="stylesheet"> 
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        @yield('head')
    </head>
    <body class="font-sans">
        <div id="app" class="flex flex-col min-h-screen">
            @include('_partials.header')
            <main class="flex-1">
                @yield('main-content')
            </main>
            @include('_partials.footer')
        </div>
    </body>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @yield('scripts')
</html>
