<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateAuditoriasTable extends Migration
{
    public function up()
    {
        Schema::create('auditorias', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llaves foraneas
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_oficio_recibido');
            $table->unsignedBigInteger('id_oficio_enviado');
            $table->unsignedBigInteger('id_registro_llamada');
            $table->unsignedBigInteger('id_memorandum');
            $table->unsignedBigInteger('id_inventario_materiales');
            $table->unsignedBigInteger('id_inventario_activos');
            //campos
            $table->date('fecha_cambio');
            $table->time('hora_cambio');
            $table->string('codigo', 50);
            $table->string('mac_address', 20);
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_oficio_recibido')
                ->references('id')
                ->on('oficio_recibidos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_oficio_enviado')
                ->references('id')
                ->on('oficio_enviados')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_registro_llamada')
                ->references('id')
                ->on('registro_llamadas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_memorandum')
                ->references('id')
                ->on('memoranda')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_inventario_materiales')
                ->references('id')
                ->on('inventario_materials')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_inventario_activos')
                ->references('id')
                ->on('inventario_activos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('auditorias');
    }
}
