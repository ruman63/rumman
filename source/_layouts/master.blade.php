<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        @yield('head')
    </head>
    <body>
        @yield('body')
    </body>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    @yield('scripts')
</html>
