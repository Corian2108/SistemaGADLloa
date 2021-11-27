<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateInventarioMaterialesTable extends Migration
{
    public function up()
    {
        Schema::create('inventario_materiales', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_tipo_materiales');
            //campos
            $table->string('detalle', 50);
            $table->float('costo_unitario');
            $table->float('costo_total');
            $table->string('nombre', 50);
            $table->integer('cantidad');
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_tipo_materiales')
                ->references('id')
                ->on('tipo_materiales')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventario_materiales');
    }
}
