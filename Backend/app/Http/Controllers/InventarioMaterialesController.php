<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario_material;
use App\Http\Resources\InventarioMaterialesResource;

class InventarioMaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario_material= Inventario_material::all();
        return $inventario_material;
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
        $inventario_material= new Inventario_material();
        $inventario_material->id_tipo_materiales=$request->id_tipo_materiales;
        
        $inventario_material->detalle=$request->detalle;
        $inventario_material->costo_unitario=$request->costo_unitario;
        $inventario_material->costo_total=$request->costo_total;
        $inventario_material->nombre=$request->nombre;
        $inventario_material->cantidad=$request->cantidad;
        $inventario_material->borrado=$request->borrado;

        if($inventario_material->save()){
            return new InventarioMaterialesResource($inventario_material);
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
        $inventario_material = Inventario_material::findOrFail($id);
        return new InventarioMaterialesResource($inventario_material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario_material=Inventario_material::find($id);
        return $inventario_material;
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
        $inventario_material = Inventario_material::findOrFail($id);
        $inventario_material->detalle=$request->detalle;
        $inventario_material->costo_unitario=$request->costo_unitario;
        $inventario_material->costo_total=$request->costo_total;
        $inventario_material->nombre=$request->nombre;
        $inventario_material->cantidad=$request->cantidad;
        $inventario_material->borrado=$request->borrado;

        if($inventario_material->save()){
            return new InventarioMaterialesResource($inventario_material);
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
        $inventario_material = Inventario_material::findOrFail($id);
        if($inventario_material->delete()){
            return new InventarioMaterialesResource($inventario_material);
        }
    }
}
