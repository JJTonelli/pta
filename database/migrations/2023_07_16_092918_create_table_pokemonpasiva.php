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
        Schema::create('PokemonPasiva', function (Blueprint $table) {
            $table->bigIncrements('PokemonPasivaID');
            $table->unsignedBigInteger('PokemonID');
            $table->unsignedBigInteger('PasivaID');

            $table->foreign('PokemonID')->references('PokemonID')->on('Pokemon');
            $table->foreign('PasivaID')->references('PasivaID')->on('Pasiva');

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
        Schema::dropIfExists('PokemonPasiva');
    }
};
