<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalidasDetalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salidas_detalle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salida_id')->unsigned();
            $table->foreign('salida_id')->references('id')->on('salidas')->onDelete('cascade');
            $table->integer('herramienta_id')->unsigned();
            $table->foreign('herramienta_id')->references('id')->on('herramientas')->onDelete('cascade');

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
        Schema::dropIfExists('salidas_detalle');
    }
}
