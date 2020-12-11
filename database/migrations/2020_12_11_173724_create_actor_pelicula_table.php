<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorPeliculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actores_peliculas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peliculas_id');
            $table->unsignedBigInteger('actores_id');
            $table->timestamps();

            $table->foreign('peliculas_id')->references('id')->on('peliculas');
            $table->foreign('actores_id')->references('id')->on('actores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actores_peliculas');
    }
}
