<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Archivo;
use \App\Models\Auditoria;
use \App\Models\Contrato;
use \App\Models\Estado_fijo;
use \App\Models\Estado_oficio;
use \App\Models\Estado_usuario;
use \App\Models\Foto_usuario;
use \App\Models\Hoja_ruta;
use \App\Models\Inventario_activo;
use \App\Models\Inventario_material;
use \App\Models\Memorandum;
use \App\Models\Oficio_enviado;
use \App\Models\Oficio_recibido;
use \App\Models\Registro_llamada;
use \App\Models\Role;
use \App\Models\Tipo_fijo;
use \App\Models\Tipo_material;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Estado_usuario::factory(5)->create();
        Role::factory(5)->create();
        User::factory(10)->create();
        Contrato::factory(10)->create();
        Registro_llamada::factory(20)->create();
        Estado_oficio::factory(5)->create();
        Oficio_recibido::factory(20)->create();
        Oficio_enviado::factory(20)->create();
        Memorandum::factory(20)->create();
        Hoja_ruta::factory(20)->create();
        Estado_fijo::factory(3)->create();
        Tipo_fijo::factory(4)->create();
        Inventario_activo::factory(50)->create();
        Tipo_material::factory(4)->create();
        Inventario_material::factory(50)->create();
        Auditoria::factory(20)->create();
        Archivo::factory(20)->create();
        Foto_usuario::factory(10)->create();
    }
}
