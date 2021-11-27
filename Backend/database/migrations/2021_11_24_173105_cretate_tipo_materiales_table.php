<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretateTipoMaterialesTable extends Migration
{
    public function up()
    {
        Schema::create('tipo_materiales', function (Blueprint $table) {
            //llave primaria
            $table->id();
            //campos
            $table->string('tipo', 30);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipo_materiales');
    }
}
