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
        //return parent::toArray($request);

        return [
            'pelicula_id' => $this->id,
            'titulo' => $this->titulo,
            'estreno' => $this->anio
            // director, actores y genero
        ];
    }
}
