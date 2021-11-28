<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro_llamada;
use App\Http\Resources\RegistroLlamadaResouce;

class RegistroLlamadasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro_llamada= Registro_llamada::all();
        return $registro_llamada;
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
        $registro_llamada= new Registro_llamada();
        $registro_llamada->nombre_llamada=$request->nombre_llamada;
        $registro_llamada->nombre_dirijido=$request->nombre_dirijido;
        $registro_llamada->fecha_llamada=$request->fecha_llamada;
        $registro_llamada->hora_llamada=$request->hora_llamada;
        $registro_llamada->numero=$request->numero;
        $registro_llamada->asunto=$request->asunto;
        $registro_llamada->borrado=$request->borrado;

        if($registro_llamada->save()){
            return new RegistroLlamadaResouce($registro_llamada);
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
        $registro_llamada = Registro_llamada::findOrFail($id);
        return new RegistroLlamadaResouce($registro_llamada);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registro_llamada=Registro_llamada::find($id);
        return $registro_llamada;
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
        $registro_llamada = Registro_llamada::findOrFail($id);
        $registro_llamada->nombre_llamada=$request->nombre_llamada;
        $registro_llamada->nombre_dirijido=$request->nombre_dirijido;
        $registro_llamada->fecha_llamada=$request->fecha_llamada;
        $registro_llamada->hora_llamada=$request->hora_llamada;
        $registro_llamada->numero=$request->numero;
        $registro_llamada->asunto=$request->asunto;
        $registro_llamada->borrado=$request->borrado;

        if($registro_llamada->save()){
            return new RegistroLlamadaResouce($registro_llamada);
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
        $registro_llamada = Registro_llamada::findOrFail($id);
        if($registro_llamada->delete()){
            return new RegistroLlamadaResouce($registro_llamada);
        }
    }
}
