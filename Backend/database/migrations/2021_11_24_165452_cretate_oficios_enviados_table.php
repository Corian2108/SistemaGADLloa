<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateOficiosEnviadosTable extends Migration
{
    public function up()
    {
        Schema::create('oficio_enviados', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_estado_oficio');
            //Campos
            $table->string('telefono', 15);
            $table->text('asunto');
            $table->string('numero_tramite', 50);
            $table->string('redirigido', 50);
            $table->date('fecha_respuesta');
            $table->text('observacion');
            $table->string('numero_oficio', 50);
            $table->date('fecha_elaboracion');
            $table->time('hora_elaboracion');
            $table->string('nombre_receptor', 50);
            $table->string('institucion', 50);
            $table->string('nombre_remitente', 50);
            $table->string('e_mail', 50);
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_estado_oficio')
                ->references('id')
                ->on('estado_oficios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('oficios_enviados');
    }
}
