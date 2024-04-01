<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesTable extends Migration
{
    public function up()
    {
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('dia');
            $table->string('horario');
            $table->unsignedBigInteger('recinto_id');
            $table->unsignedBigInteger('cuidador_id');
            $table->timestamps();

            $table->foreign('recinto_id')->references('id')->on('recintos');
            $table->foreign('cuidador_id')->references('id')->on('cuidadores');
        });
    }

    public function down()
    {
        Schema::dropIfExists('actividades');
    }
}

