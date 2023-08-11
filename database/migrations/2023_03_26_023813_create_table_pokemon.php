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
        Schema::create('Pokemon', function (Blueprint $table) {
            $table->bigIncrements('PokemonID');

            $table->integer('Numero')->nullable();

            $table->integer('HP');
            $table->integer('Ataque');
            $table->integer('AtaqueEspecial');
            $table->integer('Defensa');
            $table->integer('DefensaEspecial');
            $table->integer('Velocidad');

            $table->string('Nombre');
            $table->unsignedBigInteger('TamañoID');
            $table->unsignedBigInteger('PesoID');
            $table->unsignedBigInteger('Tipo1ID');
            $table->unsignedBigInteger('Tipo2ID')->nullable();
            $table->unsignedBigInteger('NaturalezaID')->nullable();
            $table->string('Dieta');
            $table->string('Rareza');
            $table->string('DiasIncubacion')->nullable();

            $table->string('Imagen')->nullable();
            $table->string('ImagenShiny')->nullable();
            $table->string('Sprite')->nullable();
            $table->string('SpriteShiny')->nullable();

            $table->boolean('Legendario');
            $table->unsignedBigInteger('Mega')->nullable();
            $table->unsignedBigInteger('Gigantamax')->nullable();

            $table->foreign('TamañoID')->references('TamañoID')->on('Tamaño');
            $table->foreign('PesoID')->references('PesoID')->on('Peso');
            $table->foreign('Tipo1ID')->references('TipoID')->on('Tipo');
            $table->foreign('Tipo2ID')->references('TipoID')->on('Tipo');
            $table->foreign('NaturalezaID')->references('NaturalezaID')->on('Naturaleza');
            $table->foreign('Mega')->references('PokemonID')->on('Pokemon');
            $table->foreign('Gigantamax')->references('PokemonID')->on('Pokemon');

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
        Schema::dropIfExists('Pokemon');
    }
};
