<html>
<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Login</title>
</head>
<body class="d-flex flex-column bg-dark align-middle justify-content-center">
    <h1 class="text-white">SELECCIONA UN USUARIO</h1>
    <select>
        @foreach($usuarios as $usuario)
            <option value="{{$usuario->id}}">{{$usuario->nombre}}</option>
        @endforeach
    </select>
    <a class="btn btn-primary text-white" href="{{route('peliculas.index')}}">Entrar</a>

</body>
</html>
