<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Http\Resources\Pelicula as PeliculaResource;

class ApiPeliculaController extends Controller
{
    public function getRandomFilm() {
        $pelicula = Pelicula::all()->random();

        return new PeliculaResource($pelicula);
    }
}
