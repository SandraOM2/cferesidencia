<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoHerramientaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculo_herramienta', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->foreign('vehiculo')->references('id')->on('vehiculo');
              $table->foreign('herramienta')->references('id')->on('catalogo_herramientas');
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
        Schema::dropIfExists('vehiculo_herramienta');
    }
}
