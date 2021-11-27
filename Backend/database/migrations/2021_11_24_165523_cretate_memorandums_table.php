<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateMemorandumsTable extends Migration
{
    public function up()
    {
        Schema::create('memorandums', function (Blueprint $table) {
            //Llave primaria
            $table->id();
            //lave foranea
            $table->unsignedBigInteger('id_estado_oficio');
            //campos
            $table->date('fecha_elaboracion');
            $table->string('dirijido', 50);
            $table->text('asunto');
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
        Schema::dropIfExists('memorandums');
    }
}
