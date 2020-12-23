<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pelicula extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        foreach ($this->actores as $actor) {
            $nombre_actores[] = ['nombre' => $actor->nombre];
        }

        return [
            'pelicula_id' => $this->id,
            'titulo' => $this->titulo,
            'estreno' => $this->anio,
            'director' => $this->director->nombre,
            'genero' => $this->genero->nombre,
            'actores' => $nombre_actores
        ];
    }

    public function with($request)
    {
        return [
            'versión' => 'FINAL'
        ];
    }
}
