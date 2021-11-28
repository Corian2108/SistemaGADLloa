<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio_enviado;
use App\Http\Resources\OficioEnviadoResource;

class OficioEnviadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oficio_enviado= Oficio_enviado::all();
        return $oficio_enviado;
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
        $oficio_enviado= new Oficio_enviado();
        $oficio_enviado->id_estado_oficio=$request->id_estado_oficio;

        $oficio_enviado->telefono=$request->telefono;
        $oficio_enviado->asunto=$request->asunto;
        $oficio_enviado->numero_tramite=$request->numero_tramite;
        $oficio_enviado->redirigido=$request->redirigido;
        $oficio_enviado->fecha_respuesta=$request->fecha_respuesta;
        $oficio_enviado->observacion=$request->observacion;
        $oficio_enviado->numero_oficio=$request->numero_oficio;
        $oficio_enviado->fecha_elaboracion=$request->fecha_elaboracion;
        $oficio_enviado->hora_elaboracion=$request->hora_elaboracion;
        $oficio_enviado->nombre_receptor=$request->nombre_receptor;
        $oficio_enviado->institucion=$request->institucion;
        $oficio_enviado->nombre_remitente=$request->nombre_remitente;
        $oficio_enviado->e_mail=$request->e_mail;
        $oficio_enviado->borrado=$request->borrado;

        if($oficio_enviado->save()){
            return new OficioEnviadoResource($oficio_enviado);
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
        $oficio_enviado = Oficio_enviado::findOrFail($id);
        return new OficioEnviadoResource($oficio_enviado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $oficio_enviado=Oficio_enviado::find($id);
        return $oficio_enviado;
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
        $oficio_enviado = Oficio_enviado::findOrFail($id);
        $oficio_enviado->telefono=$request->telefono;
        $oficio_enviado->asunto=$request->asunto;
        $oficio_enviado->numero_tramite=$request->numero_tramite;
        $oficio_enviado->redirigido=$request->redirigido;
        $oficio_enviado->fecha_respuesta=$request->fecha_respuesta;
        $oficio_enviado->observacion=$request->observacion;
        $oficio_enviado->numero_oficio=$request->numero_oficio;
        $oficio_enviado->fecha_elaboracion=$request->fecha_elaboracion;
        $oficio_enviado->hora_elaboracion=$request->hora_elaboracion;
        $oficio_enviado->nombre_receptor=$request->nombre_receptor;
        $oficio_enviado->institucion=$request->institucion;
        $oficio_enviado->nombre_remitente=$request->nombre_remitente;
        $oficio_enviado->e_mail=$request->e_mail;
        $oficio_enviado->borrado=$request->borrado;

        if($oficio_enviado->save()){
            return new OficioEnviadoResource($oficio_enviado);
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
        $oficio_enviado = Oficio_enviado::findOrFail($id);
        if($oficio_enviado->delete()){
            return new OficioEnviadoResource($oficio_enviado);
        }
    }
}
