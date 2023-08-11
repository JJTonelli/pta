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
        Schema::create('PokemonGrupoHuevo', function (Blueprint $table) {
            $table->bigIncrements('PokemonGrupoHuevoID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('GrupoHuevoID');
            $table->integer('Dias')->nullable();

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('GrupoHuevoID')->references('GrupoHuevoID')->on('GrupoHuevo');

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
        Schema::dropIfExists('PokemonGrupoHuevo');
    }
};
