<?php

namespace App\Http\Controllers;

use App\Models\seccion;
use App\Models\anioescolar;
use App\Models\signature;
use Illuminate\Http\Request;

class seccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $anioescolar = anioescolar::all();
        $data=array('anioescolar'=>$anioescolar);
        $seccion = Seccion::all();
        return view('seccion.list', compact('seccion','seccion'));
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('seccion.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_grado'=>'required',
            'grado'=>'required',
            'seccion'=> 'required',
            'anioescolar_id' => 'required'
        ]);
        $seccion = new Seccion([
            'nombre_grado'=>$request->get('nombre_grado'),
            'grado' => $request->get('grado'),
            'seccion'=> $request->get('seccion'),
            'anioescolar_id'=> $request->get('anioescolar_id')
        ]);
        $seccion->save();
        return redirect('/seccion')->with('success', 'Sección Añadida');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show(seccion $seccion)
    {
        //
        return view('seccion.view',compact('seccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(seccion $seccion)
    {
        //
        return view('seccion.edit',compact('seccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seccion $seccion)
    {
        //
        $request->validate([
            'nombre_grado'=>'required',
            'grado'=>'required',
            'seccion'=> 'required',
            'anioescolar_id' => 'required'
        ]);
        $seccion = Seccion::find($id);

            $seccion->nombre_grado= $_REQUEST->get('nombre_grado');
            $seccion->grado = $request->get('grado');
            $seccion->seccion= $request->get('seccion');
   
        $seccion->update();
 
        return redirect('/seccion')->with('success', 'la seccion fue actualizada con éxito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(seccion $seccion)
    {
        //
        $seccion->delete();
        return redirect('/seccion')->with('success', 'La Sección ha sido Eliminada');

    }
}
