@extends('plantilla')
@section('titulo', (isset($pelicula) ? 'MODIFICAR' : 'CREAR') . 'PELICULA')
@section('contenido')
    <form method="post" action="{{route('peliculas.' . (isset($pelicula) ? 'update' : 'store')), (isset($pelicula) ? $pelicula->id : '')}}">
       @csrf
        @method((isset($pelicula) ? 'PUT' : 'POST'))

    </form>
    @if(isset($pelicula))
        <form method="post" action="{{route('peliculas.destroy', $pelicula->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">BORRAR</button>
        </form>
    @endif
@endsection
