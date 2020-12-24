<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actor = new Actor();
        $actor->nombre = 'Will Smith';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Dwayne Jhonson';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Johnny Depp';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Robert Downey Jr.';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Brad Pitt';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Harry Styles';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Bruce Willis';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Leonardo DiCaprio';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Fionn Whitehead';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Donald Pleasence';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Jamie Lee Curtis';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Neve Campbell';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'David Arquette';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Matthew Lillard';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Courtney Cox';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Ryan Gosling';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Rachel McAdams';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'Gena Rowlands';
        $actor->save();

        $actor = new Actor();
        $actor->nombre = 'James Garner';
        $actor->save();
    }
}
