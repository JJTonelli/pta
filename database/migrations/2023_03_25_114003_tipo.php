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
        Schema::create('Tipo', function (Blueprint $table) {
            $table->bigIncrements('TipoID');
            $table->string('Nombre');
            $table->string('Color')->nullable();
            $table->string('Imagen')->nullable();
            $table->string('Icono')->nullable();

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
        Schema::dropIfExists('Tipo');
    }
};
