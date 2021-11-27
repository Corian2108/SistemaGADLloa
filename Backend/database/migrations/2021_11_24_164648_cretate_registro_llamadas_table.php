<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateRegistroLlamadasTable extends Migration
{
    public function up()
    {
        Schema::create('registro_llamadas', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //campos
            $table->string('nombre_llamada', 50);
            $table->string('nombre_dirijido', 50);
            $table->date('fecha_llamada');
            $table->time('hora_llamada');
            $table->string('numero', 20);
            $table->text('asunto');
            $table->boolean('borrado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registro_llamadas');
    }
}
