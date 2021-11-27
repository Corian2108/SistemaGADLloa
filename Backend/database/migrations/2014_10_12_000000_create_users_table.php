<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //llave foranea
            $table->unsignedBigInteger('id_rol');
            $table->unsignedBigInteger('id_estado_usuario');
            //campo
            $table->integer('ci');
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('email')->unique();
            $table->string('clave');
            $table->rememberToken();
            $table->timestamps();
            //relaciones
            $table->foreign('id_rol')
                ->references('id')
                ->on('roles')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreign('id_estado_usuario')
            ->references('id')
            ->on('estado_usuarios')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
