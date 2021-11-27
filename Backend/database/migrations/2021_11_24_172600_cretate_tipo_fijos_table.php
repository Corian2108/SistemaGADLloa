<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateTipoFijosTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_fijos', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //campos
            $table->string('tipo', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_fijos');
    }
}
