<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditoria;
use App\Http\Resources\AuditoriaResource;

class AuditoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auditoria= Auditoria::all();
        return $auditoria;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auditoria= new Auditoria();
        $auditoria->id_usuario=$request->id_usuario;
        $auditoria->id_oficio_recibido=$request->id_oficio_recibido;
        $auditoria->id_oficio_enviado=$request->id_oficio_enviado;
        $auditoria->id_registro_llamada=$request->id_registro_llamada;
        $auditoria->id_memorandum=$request->id_memorandum;
        $auditoria->id_inventario_materiales=$request->id_inventario_materiales;
        $auditoria->id_inventario_activos=$request->id_inventario_activos;
        
        $auditoria->fecha_cambio=$request->fecha_cambio;
        $auditoria->hora_cambio=$request->hora_cambio;
        $auditoria->codigo=$request->codigo;
        $auditoria->mac_address=$request->mac_address;
        $auditoria->borrado=$request->borrado;

        if($auditoria->save()){
            return new AuditoriaResource($auditoria);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $auditoria = Auditoria::findOrFail($id);
        return new AuditoriaResource($auditoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $auditoria=Auditoria::find($id);
        return $auditoria;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $auditoria = Auditoria::findOrFail($id);
        $auditoria->fecha_cambio=$request->fecha_cambio;
        $auditoria->hora_cambio=$request->hora_cambio;
        $auditoria->codigo=$request->codigo;
        $auditoria->mac_address=$request->mac_address;
        $auditoria->borrado=$request->borrado;
        if($auditoria->save()){
            return new AuditoriaResource($auditoria);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $auditoria = Auditoria::findOrFail($id);
        if($auditoria->delete()){
            return new AuditoriaResource($auditoria);
        }
    }
}
