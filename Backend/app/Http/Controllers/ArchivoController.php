<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archivo;
use App\Http\Resources\ArchivoResource;

class ArchivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $archivo = Archivo::all();
        return $archivo;
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
        $archivo = new Archivo();
        $archivo-> id_auditoria= $request->id_auditoria;
        $archivo-> ruta= $request->ruta;
        $archivo-> borrado= $request->borrado;

        if($archivo->save()){
            return new ArchivoResource($archivo);
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
        $archivo = Archivo::findOrFail($id);
        return new ArchivoResource($archivo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archivo = Archivo::find($id);
        return $archivo;
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
        $archivo =Archivo::findOrFail($id);
        $archivo-> ruta= $request->ruta;
        $archivo-> borrado= $request->borrado;
        if($archivo->save()){
            return new ArchivoResource($archivo);
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
        $archivo = Archivo::findOrFail($id);
        if($archivo->delete()){
            return new ArchivoResource($archivo);
        } 
    }
}
