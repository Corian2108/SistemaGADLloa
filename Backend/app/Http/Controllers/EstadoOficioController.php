<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado_oficio;
use App\Http\Resources\EstadoOficioResource;

class EstadoOficioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado_oficio= Estado_oficio::all();
        return $estado_oficio;
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
        $estado_oficio= new Estado_oficio();
        $estado_oficio->estado=$request->estado;
        if($estado_oficio->save()){
            return new EstadoOficioResource($estado_oficio);
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
        $estado_oficio = Estado_oficio::findOrFail($id);
        return new EstadoOficioResource($estado_oficio);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado_oficio=Estado_oficio::find($id);
        return $estado_oficio;
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
        $estado_oficio = Estado_oficio::findOrFail($id);
        $estado_oficio->estado=$request->estado;
        if($estado_oficio->save()){
            return new EstadoOficioResource($estado_oficio);
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
        $estado_oficio = Estado_oficio::findOrFail($id);
        if($estado_oficio->delete()){
            return new EstadoOficioResource($estado_oficio);
        }
    }
}
