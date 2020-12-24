<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiActoresController extends Controller
{
    public function getListaActores() {
        $listaActores = DB::select(DB::raw("select a.nombre, count(*) as cantidad_peliculas
        from actores as a
        inner join actor_pelicula as ap on a.id = ap.actor_id
        group by a.nombre
        order by cantidad_peliculas desc"));
        return $listaActores;
    }
}
