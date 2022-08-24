<?php

namespace App\Http\Controllers;

use App\Models\signature;
use App\Models\seccion;
use App\Models\user;
use Illuminate\Http\Request;

class signatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seccion = seccion::all();
        $data=array('seccion'=>$seccion);
        $user = User::all();
        $data=array('users'=>$user);
        $signature = signature::all();
        $data=array('signature'=>$signature);
        return view('signature.list', compact('signature','signature'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

         return view('signature.create');
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
            'nombre'=>'required',
            'abreviatura'=>'required',
            'seccion_id'=> 'required',
        ]);
        $signature = new signature([
            'nombre'=>$request->get('nombre'),
            'abreviatura' => $request->get('abreviatura'),
            'seccion_id'=> $request->get('seccion_id')
        ]);
        $signature->save();
        return redirect('/signature')->with('success', 'Asignatura Añadida');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function show(signature $signature)
    {
        //
        return view('signature.view',compact('signature'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function edit(signature $signature)
    {
        //
        return view('signature.edit',compact('signature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, signature $signature)
    {
        //
        $request->validate([
            'nombre'=>'required',
            'abreviatura'=>'required',
            'seccion_id'=> 'required',
        ]);
        $signature = signature::find($id);

            $signature->nombre= $_REQUEST->get('nombre');
            $signature->abreviatura = $request->get('abreviatura');
            $seccion_id->seccion_id= $request->get('seccion_id');
   
        $signature->update();
 
        return redirect('/signature')->with('success', 'actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\signature  $signature
     * @return \Illuminate\Http\Response
     */
    public function destroy(signature $signature)
    {
        //
        $signature->delete();
        return redirect('/signature')->with('success', 'Asignatura Eliminada');
    }
}
