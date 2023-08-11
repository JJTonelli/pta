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
        Schema::create('NaturalezaEstadistica', function (Blueprint $table) {
            $table->bigIncrements('NaturalezaEstadisticaID');
            $table->unsignedBigInteger('EstadisticaID');
            $table->unsignedBigInteger('NaturalezaID');
            $table->integer('Valor');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('EstadisticaID')->references('EstadisticaID')->on('Estadistica');
            $table->foreign('NaturalezaID')->references('NaturalezaID')->on('Naturaleza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NaturalezaEstadistica');
    }
};
