<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('numeroEconomico');
            $table->unsignedInteger('marca');
            $table->unsignedInteger('modelo');
            $table->integer('año');
            $table->unsignedTinyInteger('estado')->default(1);

            $table->timestamps();
            $table->foreign('marca')->references('id')->on('marca');
            $table->foreign('modelo')->references('id')->on('modelo');
            $table->foreign('estado')->references('id')->on('estados');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
