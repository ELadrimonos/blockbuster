@extends('plantilla')
@section('titulo', (isset($pelicula) ? 'MODIFICAR' : 'CREAR') . ' PELICULA')
@section('contenido')
    <form class="fs-2 d-flex flex-column gap-2 justify-content-center align-middle"
        method="post" action="{{route('peliculas.' . (isset($pelicula) ? 'update' : 'store'), (isset($pelicula) ? $pelicula->id : ''))}}">
       @csrf
        @method((isset($pelicula) ? 'PUT' : 'POST'))
        <div class="form-group d-flex flex-column">
            <label for="title" class="text-light">Título</label>
            <input type="text" id="title" name="title" value="{{ isset($pelicula) ? $pelicula->title : ''}}">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="director" class="text-light">Director</label>
            <input type="text" id="director" name="director" value="{{ isset($pelicula) ? $pelicula->director : ''}}">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="year" class="text-light">Año</label>
            <input type="text" id="year" name="year" maxlength="4" minlength="4" value="{{ isset($pelicula) ? $pelicula->year : ''}}">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="protagonist" class="text-light">Protagonista</label>
            <input type="text" id="protagonist" name="protagonist" value="{{ isset($pelicula) ? $pelicula->protagonist : ''}}">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="poster" class="text-light">URL de poster</label>
            <input type="text" id="poster" name="poster" value="{{ isset($pelicula) ? $pelicula->poster : ''}}">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="rented" class="text-light">Alquilada</label>
            <input class="form-check-input" type="checkbox" id="rented" name="rented" @if(isset($pelicula) && $pelicula->rented)checked @endif">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="synopsis" class="text-light">Synopsis</label>
            <textarea id="synopsis" name="synopsis">{{ isset($pelicula) ? $pelicula->synopsis : ''}}</textarea>
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
