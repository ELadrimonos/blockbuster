@extends('plantilla')
@section('titulo', 'LISTADO PELIS')
@section('contenido')
    <section class="d-flex flex-wrap gap-3 justify-content-around">
    @foreach($peliculas as $pelicula)
        <div class="card w-25">
            <img class="img-fluid" src="{{$pelicula->poster}}" alt="{{$pelicula->title}}">
            <h1>{{$pelicula->title}}</h1>
            <h2>{{$pelicula->director}}</h2>
        </div>

    @endforeach
    </section>
@endsection
