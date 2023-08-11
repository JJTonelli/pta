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
        Schema::create('MovimientoCompetencia', function (Blueprint $table) {
            $table->bigIncrements('MovimientoCompentenciaID');
            $table->unsignedBigInteger('MovimientoID');
            $table->unsignedBigInteger('CompetenciaID');
            $table->string('Restriccion')->nullable();

            $table->foreign('MovimientoID')->references('MovimientoID')->on('Movimiento');
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
        Schema::dropIfExists('MovimientoCompetencia');
    }
};
