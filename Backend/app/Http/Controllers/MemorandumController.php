<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memorandum;
use App\Http\Resources\MemorandumResource;

class MemorandumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memorandum= Memorandum::all();
        return $memorandum;
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
        $memorandum= new Memorandum();
        $memorandum->id_estado_oficio=$request->id_estado_oficio;
        
        $memorandum->fecha_elaboracion=$request->fecha_elaboracion;
        $memorandum->dirijido=$request->dirijido;
        $memorandum->asunto=$request->asunto;
        $memorandum->borrado=$request->borrado;

        if($memorandum->save()){
            return new MemorandumResource($memorandum);
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
        $memorandum = Memorandum::findOrFail($id);
        return new MemorandumResource($memorandum);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memorandum=Memorandum::find($id);
        return $memorandum;
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
        $memorandum = Memorandum::findOrFail($id);
        $memorandum->fecha_elaboracion=$request->fecha_elaboracion;
        $memorandum->dirijido=$request->dirijido;
        $memorandum->asunto=$request->asunto;
        $memorandum->borrado=$request->borrado;

        if($memorandum->save()){
            return new MemorandumResource($memorandum);
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
        $memorandum = Memorandum::findOrFail($id);
        if($memorandum->delete()){
            return new MemorandumResource($memorandum);
        }
    }
}
