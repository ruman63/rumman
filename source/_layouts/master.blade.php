<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">     
        @yield('head')
    </head>
    <body>
        <div id="app">
            @include('_partials.header')
            @yield('main-content')
            @include('_partials.footer')
        </div>
    </body>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @yield('scripts')
</html>
