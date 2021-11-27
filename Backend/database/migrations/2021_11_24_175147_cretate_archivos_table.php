<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateArchivosTable extends Migration
{
    public function up()
    {
        Schema::create('archivos', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_auditoria');
            //campo
            $table->string('ruta', 80);
            $table->boolean('borrado');
            $table->timestamps();
            //referencia
            $table->foreign('id_auditoria')
                ->references('id')
                ->on('auditorias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('archivos');
    }
}
