<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado_usuario;
use App\Http\Resources\EstadoUsuarioResource;

class EstadoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado_usuario= Estado_usuario::all();
        return $estado_usuario;
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
        $estado_usuario= new Estado_usuario();
        $estado_usuario->estado=$request->estado;
        if($estado_usuario->save()){
            return new EstadoUsuarioResource($estado_usuario);
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
        $estado_usuario = Estado_usuario::findOrFail($id);
        return new EstadoUsuarioResource($estado_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado_usuario=Estado_usuario::find($id);
        return $estado_usuario;
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
        $estado_usuario = Estado_usuario::findOrFail($id);
        $estado_usuario->estado=$request->estado;
        if($estado_usuario->save()){
            return new EstadoUsuarioResource($estado_usuario);
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
        $estado_usuario = Estado_usuario::findOrFail($id);
        if($estado_usuario->delete()){
            return new EstadoUsuarioResource($estado_usuario);
        }
    }
}
