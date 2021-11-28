<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo_fijo;
use App\Http\Resources\TipoFijoResource;

class TipoFijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo_fijo= Tipo_fijo::all();
        return $tipo_fijo;
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
        $tipo_fijo= new Tipo_fijo();
        $tipo_fijo->tipo=$request->tipo;
        if($tipo_fijo->save()){
            return new TipoFijoResource($tipo_fijo);
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
        $tipo_fijo = Tipo_fijo::findOrFail($id);
        return new TipoFijoResource($tipo_fijo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo_fijo=Tipo_fijo::find($id);
        return $tipo_fijo;
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
        $tipo_fijo = Tipo_fijo::findOrFail($id);
        $tipo_fijo->tipo=$request->tipo;
        if($tipo_fijo->save()){
            return new TipoFijoResource($tipo_fijo);
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
        $tipo_fijo = Tipo_fijo::findOrFail($id);
        if($tipo_fijo->delete()){
            return new TipoFijoResource($tipo_fijo);
        }
    }
}
