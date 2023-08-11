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
        Schema::create('PokemonHabilidad', function (Blueprint $table) {
            $table->bigIncrements('PokemonHabilidadID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('HabilidadID');

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('HabilidadID')->references('HabilidadID')->on('Habilidad');

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
        Schema::dropIfExists('PokemonHabilidad');
    }
};
