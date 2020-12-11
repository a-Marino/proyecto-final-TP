<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas';

    public function user() {
        return $this->belongsTo('\App\Models\User');
    }

    public function actor() {
        return $this->belongsToMany('\App\Models\Actor');
    }

    public function genero() {
        return $this->belongsTo('\App\Models\Genero');
    }

    public function director() {
        return $this->belongsTo('\App\Models\Director');
    }
}
