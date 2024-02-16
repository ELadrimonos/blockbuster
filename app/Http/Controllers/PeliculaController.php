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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $pelicula->title = $request->get('title');
        $pelicula->rented = $request->get('rented');
        $pelicula->poster = $request->get('poster');
        $pelicula->year = $request->get('year');
        $pelicula->director = $request->get('director');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Pelicula::findOrFail($id)->delete();
	return redirect()->route('peliculas.index');
    }
}
