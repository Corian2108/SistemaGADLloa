<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_material;
use App\Http\Resources\TipoMaterialResource;

class TipoMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_material= Tipo_material::all();
        return $tipo_material;
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
        $tipo_material= new Tipo_material();
        $tipo_material->tipo=$request->tipo;
        if($tipo_material->save()){
            return new TipoMaterialResource($tipo_material);
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
        $tipo_material = tipo_material::findOrFail($id);
        return new TipoMaterialResource($tipo_material);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_material=Tipo_material::find($id);
        return $tipo_material;
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
        $tipo_material = Tipo_material::findOrFail($id);
        $tipo_material->tipo=$request->tipo;
        if($tipo_material->save()){
            return new TipoMaterialResource($tipo_material);
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
        $tipo_material = Tipo_material::findOrFail($id);
        if($tipo_material->delete()){
            return new TipoMaterialResource($tipo_material);
        }
    }
}
