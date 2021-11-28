<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio_recibido;
use App\Http\Resources\OficioRecibidoResouce;

class OficioRecibidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficio_recibido= Oficio_recibido::all();
        return $oficio_recibido;

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
        $oficio_recibido= new Oficio_recibido();
        $oficio_recibido->id_estado_oficios=$request->id_estado_oficios;

        $oficio_recibido->telefono=$request->telefono;
        $oficio_recibido->asunto=$request->asunto;
        $oficio_recibido->numero_tramite=$request->numero_tramite;
        $oficio_recibido->redirigido=$request->redirigido;
        $oficio_recibido->fecha_respuesta=$request->fecha_respuesta;
        $oficio_recibido->aprobacion=$request->aprobacion;
        $oficio_recibido->observacion=$request->observacion;
        $oficio_recibido->numero_oficio=$request->numero_oficio;
        $oficio_recibido->fecha_ingreso=$request->fecha_ingreso;
        $oficio_recibido->hora_ingreso=$request->hora_ingreso;
        $oficio_recibido->nombre_solicitante=$request->nombre_solicitante;
        $oficio_recibido->institucion=$request->institucion;
        $oficio_recibido->nombre_receptor=$request->nombre_receptor;
        $oficio_recibido->e_mail=$request->e_mail;
        $oficio_recibido->borrado=$request->borrado;

        if($oficio_recibido->save()){
            return new OficioRecibidoResouce($oficio_recibido);
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
        $oficio_recibido = Oficio_recibido::findOrFail($id);
        return new OficioRecibidoResouce($oficio_recibido);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oficio_recibido=Oficio_recibido::find($id);
        return $oficio_recibido;
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
        $oficio_recibido = Oficio_recibido::findOrFail($id);
        $oficio_recibido->telefono=$request->telefono;
        $oficio_recibido->asunto=$request->asunto;
        $oficio_recibido->numero_tramite=$request->numero_tramite;
        $oficio_recibido->redirigido=$request->redirigido;
        $oficio_recibido->fecha_respuesta=$request->fecha_respuesta;
        $oficio_recibido->aprobacion=$request->aprobacion;
        $oficio_recibido->observacion=$request->observacion;
        $oficio_recibido->numero_oficio=$request->numero_oficio;
        $oficio_recibido->fecha_ingreso=$request->fecha_ingreso;
        $oficio_recibido->hora_ingreso=$request->hora_ingreso;
        $oficio_recibido->nombre_solicitante=$request->nombre_solicitante;
        $oficio_recibido->institucion=$request->institucion;
        $oficio_recibido->nombre_receptor=$request->nombre_receptor;
        $oficio_recibido->e_mail=$request->e_mail;
        $oficio_recibido->borrado=$request->borrado;

        if($oficio_recibido->save()){
            return new OficioRecibidoResouce($oficio_recibido);
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
        $oficio_recibido = Oficio_recibido::findOrFail($id);
        if($oficio_recibido->delete()){
            return new OficioRecibidoResouce($oficio_recibido);
        }
    }
}
