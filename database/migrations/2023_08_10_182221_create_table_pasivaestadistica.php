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
        Schema::create('PasivaEstadistica', function (Blueprint $table) {
            $table->bigIncrements('PasivaEstadisticaID');
            $table->unsignedBigInteger('PasivaID');
            $table->unsignedBigInteger('EstadisticaID');
            $table->integer('Valor');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('PasivaID')->references('PasivaID')->on('Pasiva');
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
        Schema::dropIfExists('PasivaEstadistica');
    }
};
