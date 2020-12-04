<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('peliculas.index', ['peliculas' => $peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peliculas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'anio' => 'required'
        ]);

        $pelicula = new Pelicula();
        $pelicula->titulo = $request->input('titulo');
        $pelicula->anio = $request->input('anio');
        $peliculas->save();

        return redirect('/peliculas')->with('success', 'Pelicula agregada Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        return view('peliculas.show', ['pelicula' => $pelicula]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        return view('peliculas.edit', ['pelicula' => $pelicula]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'anio' => 'required'
        ]);

        $pelicula = Pelicula::findOrFail($id);
        $pelicula->titulo = $request->input('titulo');
        $pelicula->anio = $request->input('anio');
        $peliculas->save();

        return redirect('/peliculas')->with('success', 'Pelicula actualizada Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);

        $pelicula->delete();

        return redirect('/peliculas')->with('success', 'Pelicula eliminada Exitosamente');
    }
}
