<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PokemonHabitat', function (Blueprint $table) {
            $table->bigIncrements('PokemonHabitatID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('HabitatID');

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('HabitatID')->references('HabitatID')->on('Habitat');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PokemonHabitat');
    }
};
