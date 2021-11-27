<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateOficiosRecibidosTable extends Migration
{
    public function up()
    {
        Schema::create('oficios_recibidos', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_estado_oficios');
            //Campos
            $table->string('telefono', 20);
            $table->text('asunto');
            $table->string('numero_tramite', 50);
            $table->string('redirigido', 50);
            $table->date('fecha_respuesta');
            $table->string('aprobacion', 50);
            $table->text('observacion');
            $table->string('numero_oficio', 50);
            $table->date('fecha_ingreso');
            $table->time('hora_ingreso');
            $table->string('nombre_solicitante', 50);
            $table->string('institucion', 50);
            $table->string('nombre_receptor', 50);
            $table->string('e-mail', 50);
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_estado_oficios')
                ->references('id')
                ->on('estado_oficios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('oficios_recibidos');
    }
}
