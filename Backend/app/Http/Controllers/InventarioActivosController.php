<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario_activo;
use App\Http\Resources\InventarioActivosResource;

class InventarioActivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario_activo= Inventario_activo::all();
        return $inventario_activo;
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
        $inventario_activo= new Inventario_activo();
        $inventario_activo->id_tipo_fijo=$request->id_tipo_fijo;
        $inventario_activo->id_estado_fijo=$request->id_estado_fijo;
        
        $inventario_activo->detalle=$request->detalle;
        $inventario_activo->activo=$request->activo;
        $inventario_activo->fijo=$request->fijo;
        $inventario_activo->numero_serie=$request->numero_serie;
        $inventario_activo->cantidad=$request->cantidad;
        $inventario_activo->valor=$request->valor;
        $inventario_activo->borrado=$request->borrado;

        if($inventario_activo->save()){
            return new InventarioActivosResource($inventario_activo);
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
        $inventario_activo = Inventario_activo::findOrFail($id);
        return new InventarioActivosResource($inventario_activo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario_activo=Inventario_activo::find($id);
        return $inventario_activo;
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
        $inventario_activo = Inventario_activo::findOrFail($id);
        $inventario_activo->detalle=$request->detalle;
        $inventario_activo->activo=$request->activo;
        $inventario_activo->fijo=$request->fijo;
        $inventario_activo->numero_serie=$request->numero_serie;
        $inventario_activo->cantidad=$request->cantidad;
        $inventario_activo->valor=$request->valor;
        $inventario_activo->borrado=$request->borrado;

        if($inventario_activo->save()){
            return new InventarioActivosResource($inventario_activo);
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
        $inventario_activo = Inventario_activo::findOrFail($id);
        if($inventario_activo->delete()){
            return new InventarioActivosResource($inventario_activo);
        }
    }
}
