<?php

use Facade\Ignition\Tabs\Tab;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateHojasRutaTable extends Migration
{
    public function up()
    {
        Schema::create('hojas_ruta', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_oficio_recibido');
            //campos
            $table->float('combustible');
            $table->text('observacion');
            $table->date('fecha_salida');
            $table->date('fecha_ingreso');
            $table->string('solicitante', 50);
            $table->string('lugar', 50);
            $table->string('actividad', 100);
            $table->integer('cantidad');
            $table->time('hora');
            $table->date('fecha_solicitud');
            $table->boolean('borrado');
            $table->timestamps();
            //referencia
            $table->foreign('id_oficio_recibido')
                ->references('id')
                ->on('oficios_recibidos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        //
    }
}
