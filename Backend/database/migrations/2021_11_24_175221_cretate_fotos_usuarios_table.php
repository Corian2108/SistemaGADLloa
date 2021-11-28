<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateFotosUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('foto_usuarios', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_usuario');
            //campo
            $table->string('ruta', 100);
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
        Schema::dropIfExists('fotos_usuarios');
    }
}
