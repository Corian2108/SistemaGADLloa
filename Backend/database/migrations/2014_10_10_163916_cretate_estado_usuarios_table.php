<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateEstadoUsuariosTable extends Migration
{
    public function up()
    {
        Schema::create('estado_usuarios', function (Blueprint $table) {
            //Primary Key
            $table->id();
            //Fields
            $table->string('estado', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('estado_usuarios');
    }
}
