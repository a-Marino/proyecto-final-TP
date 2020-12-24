<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $director = new Director();
        $director->nombre = 'Martin Scorsese';
        $director->save();

        $director = new Director();
        $director->nombre = 'Steven Spielberg';
        $director->save();

        $director = new Director();
        $director->nombre = 'Quentin Tarantino';
        $director->save();

        $director = new Director();
        $director->nombre = 'Christopher Nolan';
        $director->save();

        $director = new Director();
        $director->nombre = 'Tim Burton';
        $director->save();

        $director = new Director();
        $director->nombre = 'Clint Eastwood';
        $director->save();

        $director = new Director();
        $director->nombre = 'Francis Ford Coppola';
        $director->save();

        $director = new Director();
        $director->nombre = 'Stanley Kubrick';
        $director->save();

        $director = new Director();
        $director->nombre = 'Nick Cassavetes';
        $director->save();

        $director = new Director();
        $director->nombre = 'John Carpenter';
        $director->save();

        $director = new Director();
        $director->nombre = 'Wes Craven';
        $director->save();
    }
}
