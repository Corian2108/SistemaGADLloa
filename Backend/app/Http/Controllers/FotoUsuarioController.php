<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foto_usuario;
use App\Http\Resources\FotoUsuarioResource;

class FotoUsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto_usuario= Foto_usuario::all();
        return $foto_usuario;
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
        $foto_usuario= new Foto_usuario();
        $foto_usuario->id_usuario=$request->id_usuario;
        $foto_usuario->ruta=$request->ruta;
        if($foto_usuario->save()){
            return new FotoUsuarioResource($foto_usuario);
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
        $foto_usuario = Foto_usuario::findOrFail($id);
        return new FotoUsuarioResource($foto_usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto_usuario=Foto_usuario::find($id);
        return $foto_usuario;
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
        $foto_usuario = Foto_usuario::findOrFail($id);
        $foto_usuario->ruta=$request->ruta;
        if($foto_usuario->save()){
            return new FotoUsuarioResource($foto_usuario);
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
        $foto_usuario = Foto_usuario::findOrFail($id);
        if($foto_usuario->delete()){
            return new FotoUsuarioResource($foto_usuario);
        }
    }
}
