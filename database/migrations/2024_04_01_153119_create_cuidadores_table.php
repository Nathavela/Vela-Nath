<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuidadoresTable extends Migration
{
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('especialidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cuidadores');
    }
}

