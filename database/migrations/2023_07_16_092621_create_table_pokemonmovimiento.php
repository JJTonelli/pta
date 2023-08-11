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
        Schema::create('PokemonMovimiento', function (Blueprint $table) {
            $table->bigIncrements('PokemonMovimientoID');
            $table->unsignedBigInteger('MovimientoID');
            $table->unsignedBigInteger('PokemonID');

            $table->foreign('MovimientoID')->references('MovimientoID')->on('Movimiento');
            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');

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
        Schema::dropIfExists('PokemonMovimiento');
    }
};
