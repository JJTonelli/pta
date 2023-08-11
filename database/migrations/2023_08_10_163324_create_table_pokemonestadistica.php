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
        Schema::create('PokemonEstadistica', function (Blueprint $table) {
            $table->bigIncrements('PokemonEstadisticaID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('EstadisticaID');
            $table->integer('Valor');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('EstadisticaID')->references('EstadisticaID')->on('Estadistica');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PokemonEstadistica');
    }
};
