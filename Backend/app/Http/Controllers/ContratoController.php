<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Http\Resources\ContratoResource;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato= Contrato::all();
        return $contrato;
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
        $contrato= new Contrato();
        $contrato->id_usuario=$request->id_usuario;
        $contrato->inicio=$request->inicio;
        $contrato->fin=$request->fin;
        $contrato->horas_diarias=$request->horas_diarias;
        $contrato->horas_mensuales=$request->horas_mensuales;
        $contrato->borrado=$request->borrado;
        if($contrato->save()){
            return new ContratoResource($contrato);
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
        $contrato = Contrato::findOrFail($id);
        return new ContratoResource($contrato);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contrato=Contrato::find($id);
        return $contrato;
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
        $contrato = Contrato::findOrFail($id);
        $contrato->inicio=$request->inicio;
        $contrato->fin=$request->fin;
        $contrato->horas_diarias=$request->horas_diarias;
        $contrato->horas_mensuales=$request->horas_mensuales;
        $contrato->borrado=$request->borrado;
        if($contrato->save()){
            return new ContratoResource($contrato);
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
        $contrato = Contrato::findOrFail($id);
        if($contrato->delete()){
            return new ContratoResource($contrato);
        }
    }
}
