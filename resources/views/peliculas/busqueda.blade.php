@extends('plantilla')
@section('titulo', 'FILTRO DIRECTOR')
@section('contenido')
    <h1>Busqueda por director</h1>
    <form method="post" action="{{route('peliculas.filtrar')}}">
        @csrf
        <select class="form-select form-select-lg mb-3" name="nombre">
            @foreach($peliculas as $pelicula)
                <option value="{{$pelicula->director}}">{{$pelicula->director}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary">BUSCAR</button>
    </form>
@endsection
