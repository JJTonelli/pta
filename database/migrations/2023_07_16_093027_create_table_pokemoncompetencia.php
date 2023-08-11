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
        Schema::create('PokemonCompetencia', function (Blueprint $table) {
            $table->bigIncrements('PokemonCompetenciaID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('CompetenciaID');

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('CompetenciaID')->references('CompetenciaID')->on('Competencia');

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
        Schema::dropIfExists('PokemonCompetencia');
    }
};
