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
        Schema::create('Item', function (Blueprint $table) {

            $table->bigIncrements('ItemID');
            $table->string('Nombre');
            $table->text('Efecto')->nullable();
            $table->integer('Precio')->nullable();
            $table->boolean('Ilegal')->nullable();
            $table->unsignedBigInteger('TipoItemID');

            $table->foreign('TipoItemID')->references('TipoItemID')->on('TipoItem');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Item');
    }
};
