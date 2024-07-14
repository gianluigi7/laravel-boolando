<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title')</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('shared.header')
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        @include('shared.footer')
    </footer>
</body>
</html>
<!-- ESEMPIO IMG
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> -->