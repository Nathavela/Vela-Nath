<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalTab extends Migration
{
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('especie_id');
            $table->unsignedBigInteger('recinto_id');
            $table->unsignedBigInteger('cuidador_id');
            $table->timestamps();

            $table->foreign('especie_id')->references('id')->on('especies');
            $table->foreign('recinto_id')->references('id')->on('recintos');
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
        });
    }

    public function down()
    {
        Schema::dropIfExists('animales');
    }
};
