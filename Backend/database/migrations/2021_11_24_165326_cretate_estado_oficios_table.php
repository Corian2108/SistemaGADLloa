<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateEstadoOficiosTable extends Migration
{
    public function up()
    {
        Schema::create('estado_oficios', function (Blueprint $table) {
            //Llave Primaria
            $table->id();
            //Campos
            $table->string('estado', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_oficios');
    }
}
