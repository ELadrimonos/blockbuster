@extends('plantilla')
@section('titulo', 'DETALLES PELI')
@section('contenido')
    <section class="d-flex">
        <img src="{{$pelicula->poster}}">
        <article class="bg-white w-100 m-lg-5 p-4 d-flex flex-column justify-content-between">
            <h1 class="text-uppercase display-3">{{$pelicula->title}}</h1>
            <h2>{{$pelicula->director}}</h2>
            <h3>{{$pelicula->year}}</h3>
            <h4>Protagonizada por {{$pelicula->protagonist ?? 'DESCONOCIDO'}}</h4>
            <h4>Alquilada: {{$pelicula->rented == 1 ? 'SI' : 'NO'}}</h4>
            <p>{{$pelicula->synopsis}}</p>
            <a class="btn btn-warning" href="{{route('peliculas.edit', $pelicula->id)}}">Modificar</a>
        </article>
    </section>
@endsection
