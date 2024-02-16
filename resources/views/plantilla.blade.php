<html>
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body class="d-flex bg-dark">
@include('partials.nav')
<main class="border-start">
@yield('contenido')
</main>
</body>
</html>
