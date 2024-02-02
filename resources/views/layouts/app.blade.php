<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel')</title>
    @vite('resources/js/app.js')
    @yield('head-content')
</head>
<body>
    <main>
        <!-- yield offre la possibilità di essere sostituito -->
        @yield('main-content')
    </main>
</body>
</html>