<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\EstadoOficioController;
use App\Http\Controllers\EstadoUsuarioController;
use App\Http\Controllers\FotoUsuarioController;
use App\Http\Controllers\HojaRutaController;
use App\Http\Controllers\InventarioActivosController;
use App\Http\Controllers\InventarioMaterialesController;
use App\Http\Controllers\MemorandumController;
use App\Http\Controllers\OficioEnviadoController;
use App\Http\Controllers\OficioRecibidoController;
use App\Http\Controllers\RegistroLlamadasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TipoFijoController;
use App\Http\Controllers\TipoMaterialController;
use App\Http\Controllers\UsuarioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Archivo
Route::get('/archivo',[ArchivoController::class, 'index']);
Route::post('/archivo/create',[ArchivoController::class, 'store']);
Route::get('/archivo/{id}',[ArchivoController::class, 'edit']);
Route::put('/archivo/{id}',[ArchivoController::class, 'update']);
Route::delete('/archivo/{id}',[ArchivoController::class, 'destroy']);

//Auditoria
Route::get('/auditoria',[AuditoriaController::class, 'index']);
Route::post('/auditoria/create',[AuditoriaController::class, 'store']);
Route::get('/auditoria/{id}',[AuditoriaController::class, 'edit']);
Route::put('/auditoria/{id}',[AuditoriaController::class, 'update']);
Route::delete('/auditoria/{id}',[AuditoriaController::class, 'destroy']);

//Contrato
Route::get('/contrato',[ContratoController::class, 'index']);
Route::post('/contrato/create',[ContratoController::class, 'store']);
Route::get('/contrato/{id}',[ContratoController::class, 'edit']);
Route::put('/contrato/{id}',[ContratoController::class, 'update']);
Route::delete('/contrato/{id}',[ContratoController::class, 'destroy']);

//Estado Oficio
Route::get('/estado_oficio',[EstadoOficioController::class, 'index']);
Route::post('/estado_oficio/create',[EstadoOficioController::class, 'store']);
Route::get('/estado_oficio/{id}',[EstadoOficioController::class, 'edit']);
Route::put('/estado_oficio/{id}',[EstadoOficioController::class, 'update']);
Route::delete('/estado_oficio/{id}',[EstadoOficioController::class, 'destroy']);
//Estado usuario
Route::get('/estado_usuario',[EstadoUsuarioController::class, 'index']);
Route::post('/estado_usuario/create',[EstadoUsuarioController::class, 'store']);
Route::get('/estado_usuario/{id}',[EstadoUsuarioController::class, 'edit']);
Route::put('/estado_usuario/{id}',[EstadoUsuarioController::class, 'update']);
Route::delete('/estado_usuario/{id}',[EstadoUsuarioController::class, 'destroy']);
//Foto usuario
Route::get('/foto_usuario',[FotoUsuarioController::class, 'index']);
Route::post('/foto_usuario/create',[FotoUsuarioController::class, 'store']);
Route::get('/foto_usuario/{id}',[FotoUsuarioController::class, 'edit']);
Route::put('/foto_usuario/{id}',[FotoUsuarioController::class, 'update']);
Route::delete('/foto_usuario/{id}',[FotoUsuarioController::class, 'destroy']);

//Hoja Ruta
Route::get('/hoja_ruta',[HojaRutaController::class, 'index']);
Route::post('/hoja_ruta/create',[HojaRutaController::class, 'store']);
Route::get('/hoja_ruta/{id}',[HojaRutaController::class, 'edit']);
Route::put('/hoja_ruta/{id}',[HojaRutaController::class, 'update']);
Route::delete('/hoja_ruta/{id}',[HojaRutaController::class, 'destroy']);

//Inventario Activos
Route::get('/inventario_activo',[InventarioActivosController::class, 'index']);
Route::post('/inventario_activo/create',[InventarioActivosController::class, 'store']);
Route::get('/inventario_activo/{id}',[InventarioActivosController::class, 'edit']);
Route::put('/inventario_activo/{id}',[InventarioActivosController::class, 'update']);
Route::delete('/inventario_activo/{id}',[InventarioActivosController::class, 'destroy']);

//Inventario Materiales
Route::get('/inventario_material',[InventarioMaterialesController::class, 'index']);
Route::post('/inventario_material/create',[InventarioMaterialesController::class, 'store']);
Route::get('/inventario_material/{id}',[InventarioMaterialesController::class, 'edit']);
Route::put('/inventario_material/{id}',[InventarioMaterialesController::class, 'update']);
Route::delete('/inventario_material/{id}',[InventarioMaterialesController::class, 'destroy']);

//Memorandum
Route::get('/memorandum',[MemorandumController::class, 'index']);
Route::post('/memorandum/create',[MemorandumController::class, 'store']);
Route::get('/memorandum/{id}',[MemorandumController::class, 'edit']);
Route::put('/memorandum/{id}',[MemorandumController::class, 'update']);
Route::delete('/memorandum/{id}',[MemorandumController::class, 'destroy']);

//Oficio Enviados
Route::get('/oficio_enviado',[OficioEnviadoController::class, 'index']);
Route::post('/oficio_enviado/create',[OficioEnviadoController::class, 'store']);
Route::get('/oficio_enviado/{id}',[OficioEnviadoController::class, 'edit']);
Route::put('/oficio_enviado/{id}',[OficioEnviadoController::class, 'update']);
Route::delete('/oficio_enviado/{id}',[OficioEnviadoController::class, 'destroy']);

//Oficio Recibidos
Route::get('/oficio_recibido',[OficioRecibidoController::class, 'index']);
Route::post('/oficio_recibido/create',[OficioRecibidoController::class, 'store']);
Route::get('/oficio_recibido/{id}',[OficioRecibidoController::class, 'edit']);
Route::put('/oficio_recibido/{id}',[OficioRecibidoController::class, 'update']);
Route::delete('/oficio_recibido/{id}',[OficioRecibidoController::class, 'destroy']);

//Registro llamadas
Route::get('/registro_llamada',[RegistroLlamadasController::class, 'index']);
Route::post('/registro_llamada/create',[RegistroLlamadasController::class, 'store']);
Route::get('/registro_llamada/{id}',[RegistroLlamadasController::class, 'edit']);
Route::put('/registro_llamada/{id}',[RegistroLlamadasController::class, 'update']);
Route::delete('/registro_llamada/{id}',[RegistroLlamadasController::class, 'destroy']);

//Roles
Route::get('/rol',[RolesController::class, 'index']);
Route::post('/rol/create',[RolesController::class, 'store']);
Route::get('/rol/{id}',[RolesController::class, 'edit']);
Route::put('/rol/{id}',[RolesController::class, 'update']);
Route::delete('/rol/{id}',[RolesController::class, 'destroy']);

//Tipo Fijo
Route::get('/tipo_fijo',[TipoFijoController::class, 'index']);
Route::post('/tipo_fijo/create',[TipoFijoController::class, 'store']);
Route::get('/tipo_fijo/{id}',[TipoFijoController::class, 'edit']);
Route::put('/tipo_fijo/{id}',[TipoFijoController::class, 'update']);
Route::delete('/tipo_fijo/{id}',[TipoFijoController::class, 'destroy']);

//Tipo Material
Route::get('/tipo_material',[TipoMaterialController::class, 'index']);
Route::post('/tipo_material/create',[TipoMaterialController::class, 'store']);
Route::get('/tipo_material/{id}',[TipoMaterialController::class, 'edit']);
Route::put('/tipo_material/{id}',[TipoMaterialController::class, 'update']);
Route::delete('/tipo_material/{id}',[TipoMaterialController::class, 'destroy']);

//Users
Route::get('/user',[UsuarioController::class, 'index']);
Route::post('/user/create',[UsuarioController::class, 'store']);
Route::get('/user/{id}',[UsuarioController::class, 'edit']);
Route::put('/user/{id}',[UsuarioController::class, 'update']);
Route::delete('/user/{id}',[UsuarioController::class, 'destroy']);