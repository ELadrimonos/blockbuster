@extends('plantilla')
@section('titulo', (isset($pelicula) ? 'MODIFICAR' : 'CREAR') . ' PELICULA')
@section('contenido')
    <form
        method="post" action="{{route('peliculas.' . (isset($pelicula) ? 'update' : 'store'), (isset($pelicula) ? $pelicula->id : ''))}}">
       @csrf
        @method((isset($pelicula) ? 'PUT' : 'POST'))
        <div class="form-group">
            <label for="title" class="text-light">Título</label>
            <input type="text" id="title" name="title" value="{{ isset($pelicula) ? $pelicula->title : ''}}">
        </div>
        <div class="form-group">
            <label for="director" class="text-light">Director</label>
            <input type="text" id="director" name="director" value="{{ isset($pelicula) ? $pelicula->director : ''}}">
        </div>
        <button class="btn btn-success">{{(isset($pelicula) ? 'ACTUALIZAR' : 'CREAR')}}</button>
    </form>
    @if(isset($pelicula))
        <form method="post" action="{{route('peliculas.destroy', $pelicula->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">BORRAR</button>
        </form>
    @endif
@endsection
