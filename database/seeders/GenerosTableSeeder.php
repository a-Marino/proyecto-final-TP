<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genero;

class GenerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genero = new Genero();
        $genero->nombre = 'Accion';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Belica';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Aventuras';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Ciencia Ficcion';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Comedia';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Terror';
        $genero->save();

        $genero = new Genero();
        $genero->nombre = 'Romantica';
        $genero->save();
    }
}
