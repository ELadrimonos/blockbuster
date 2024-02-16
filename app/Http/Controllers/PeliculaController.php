<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Pelicula::get();
        return view('peliculas.listado', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peliculas.formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $this->escribirDatos($request, $pelicula);
        return redirect()->route('peliculas.show', $pelicula->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.detalles', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('peliculas.formulario', compact('pelicula'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $this->escribirDatos($request, $pelicula);
        return redirect()->route('peliculas.show', $id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pelicula::findOrFail($id)->delete();
	    return redirect()->route('peliculas.index');
    }

    public function buscarPorDirector()
    {
        $peliculas = Pelicula::get();
        return view('peliculas.busqueda', compact('peliculas'));

    }

    public function filtrarDirector(Request $request)
    {
        $peliculas = Pelicula::get();
        $peliculasFiltradas = array();
        foreach ($peliculas as $pelicula){
            if ($pelicula->director == $request->get('nombre'))
                $peliculasFiltradas[] = $pelicula;
        }
        $peliculas = $peliculasFiltradas;
        return view('peliculas.listado', compact('peliculas'));
    }
    public function escribirDatos(Request $request, $pelicula): void
    {
        $pelicula->title = $request->get('title');
        $pelicula->rented = $request->get('rented') === 'on' ? 1 : 0;
        $pelicula->poster = $request->get('poster');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');
        $pelicula->protagonist = $request->get('protagonist');
        $pelicula->synopsis = $request->get('synopsis');
        $pelicula->save();
    }
}
