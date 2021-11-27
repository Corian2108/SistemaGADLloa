<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateInventarioActivosTable extends Migration
{
    public function up()
    {
        Schema::create('inventario_activos', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_tipo_fijo');
            $table->unsignedBigInteger('id_estado_fijo');
            //campo
            $table->string('detalle', 100);
            $table->string('activo', 50);
            $table->boolean('fijo');
            $table->integer('numero_serie');
            $table->integer('cantidad');
            $table->float('valor');
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_tipo_fijo')
                ->references('id')
                ->on('tipo_fijos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_estado_fijo')
                ->references('id')
                ->on('estado_fijos')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventario_activos');
    }
}
