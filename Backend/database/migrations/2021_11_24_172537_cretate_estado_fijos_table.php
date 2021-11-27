<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateEstadoFijosTable extends Migration
{
    public function up()
    {
        Schema::create('estado_fijos', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //campo
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_fijos');
    }
}
