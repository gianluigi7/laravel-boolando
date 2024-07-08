
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('shared.header')
    <h1> {{$title}} </h1>
    <h2>prova</h2>
    @include('shared.main')
    @include('shared.footer')

<!-- ESEMPIO IMG
<img src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> -->
</body>
</html>