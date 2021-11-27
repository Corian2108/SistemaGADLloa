<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateContratosTable extends Migration
{
    public function up()
    {
        Schema::create('contratos', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //Llave foranea
            $table->unsignedBigInteger('id_usuario');
            //Campos
            $table->date('inicio');
            $table->date('fin');
            $table->integer('horas_diarias');
            $table->integer('horas_mensuales');
            $table->boolean('borrado');
            $table->timestamps();
            //referencias
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contratos');
    }
}
