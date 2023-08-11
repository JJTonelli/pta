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
        Schema::create('Movimiento', function (Blueprint $table) {
            $table->bigIncrements('MovimientoID');
            $table->string('Nombre');
            $table->string('Rango');
            $table->unsignedBigInteger('TipoID');
            $table->unsignedBigInteger('TipoAtaqueID');
            $table->unsignedBigInteger('Frecuencia')->nullable();
            $table->string('CantidadDado')->nullable();
            $table->unsignedBigInteger('DadoID')->nullable();
            $table->string('Efecto')->nullable();
            $table->unsignedBigInteger('HabilidadID')->nullable();
            $table->unsignedBigInteger('HabilidadID2')->nullable();

            $table->string('EstadisticaConcurso')->nullable();
            $table->string('KeywordConcurso')->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('TipoID')->references('TipoID')->on('Tipo');
            $table->foreign('TipoAtaqueID')->references('TipoAtaqueID')->on('TipoAtaque');
            $table->foreign('DadoID')->references('DadoID')->on('Dado');
            $table->foreign('HabilidadID')->references('HabilidadID')->on('Habilidad');
            $table->foreign('HabilidadID2')->references('HabilidadID')->on('Habilidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Movimiento');
    }
};
