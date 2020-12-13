<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Actor;
use App\Models\Director;
use App\Models\Genero;

class PeliculasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
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
        $actores = Actor::all();
        $directores = Director::pluck('nombre', 'id');
        $generos = Genero::pluck('nombre', 'id');

        return view('peliculas.create', ['actores' => $actores, 'directores' => $directores, 'generos' => $generos]);
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
            'anio' => 'required',
            'portada' => 'image|nullable'
        ]);

        if ($request->hasFile('portada')) {

            $nombre_original = $request->file('portada')->getClientOriginalName();
            $nombre = pathInfo($nombre_original, PATHINFO_FILENAME);
            $extension = $request->file('portada')->getClientOriginalExtension();
            $nombre_a_guardar = $nombre.time().'.'.$extension;

            $request->file('portada')->storeAs('public/portadas', $nombre_a_guardar);

        } else {

            $nombre_a_guardar = 'noimage.jpg';

        }

        $pelicula = new Pelicula();
        $pelicula->titulo = $request->input('titulo');
        $pelicula->anio = $request->input('anio');
        $pelicula->genero_id = $request->input('genero');
        $pelicula->director_id = $request->input('director');
        $pelicula->user_id = auth()->user()->id;
        $pelicula->path_imagen = $nombre_a_guardar;
        $pelicula->save();
        $pelicula->actores()->sync(request('actor'));

        return redirect('/home')->with('success', 'Pelicula agregada Exitosamente');
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
        $actores = Actor::all();
        $directores = Director::pluck('nombre', 'id');
        $generos = Genero::pluck('nombre', 'id');

        if (auth()->user()->id !== $pelicula->user_id) {
            return redirect('/peliculas')->with('error', 'Acceso no autorizado');
        } else {
            return view('peliculas.edit', ['pelicula' => $pelicula, 'actores' =>$actores, 'directores' => $directores, 'generos' => $generos]);
        }
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
        $pelicula->genero_id = $request->input('genero');
        $pelicula->director_id = $request->input('director');
        $pelicula->user_id = auth()->user()->id;
        $pelicula->save();
        $pelicula->actores()->sync(request('actor'));

        return redirect('/home')->with('success', 'Pelicula actualizada Exitosamente');
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
