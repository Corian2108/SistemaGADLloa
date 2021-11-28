<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hoja_ruta;
use App\Http\Resources\HojaRutaResource;
class HojaRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoja_ruta= Hoja_ruta::all();
        return $hoja_ruta;
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
        $hoja_ruta= new Hoja_ruta();
        $hoja_ruta->id_oficio_recibido=$request->id_oficio_recibido;
        
        $hoja_ruta->combustible=$request->combustible;
        $hoja_ruta->observacion=$request->observacion;
        $hoja_ruta->fecha_salida=$request->fecha_salida;
        $hoja_ruta->fecha_ingreso=$request->fecha_ingreso;
        $hoja_ruta->solicitante=$request->solicitante;
        $hoja_ruta->lugar=$request->lugar;
        $hoja_ruta->actividad=$request->actividad;
        $hoja_ruta->cantidad=$request->cantidad;
        $hoja_ruta->hora=$request->hora;
        $hoja_ruta->fecha_solicitud=$request->fecha_solicitud;
        $hoja_ruta->borrado=$request->borrado;

        if($hoja_ruta->save()){
            return new HojaRutaResource($hoja_ruta);
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
        $hoja_ruta = Hoja_ruta::findOrFail($id);
        return new HojaRutaResource($hoja_ruta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hoja_ruta=Hoja_ruta::find($id);
        return $hoja_ruta;
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
        $hoja_ruta = Hoja_ruta::findOrFail($id);
        $hoja_ruta->combustible=$request->combustible;
        $hoja_ruta->observacion=$request->observacion;
        $hoja_ruta->fecha_salida=$request->fecha_salida;
        $hoja_ruta->fecha_ingreso=$request->fecha_ingreso;
        $hoja_ruta->solicitante=$request->solicitante;
        $hoja_ruta->lugar=$request->lugar;
        $hoja_ruta->actividad=$request->actividad;
        $hoja_ruta->cantidad=$request->cantidad;
        $hoja_ruta->hora=$request->hora;
        $hoja_ruta->fecha_solicitud=$request->fecha_solicitud;
        $hoja_ruta->borrado=$request->borrado;

        if($hoja_ruta->save()){
            return new HojaRutaResource($hoja_ruta);
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
        $hoja_ruta = Hoja_ruta::findOrFail($id);
        if($hoja_ruta->delete()){
            return new HojaRutaResource($hoja_ruta);
        }
    }
}
