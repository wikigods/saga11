<?php

namespace App\Http\Controllers;

use App\Models\crp;
use Illuminate\Http\Request;

class crpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = student::all();
        $data=array('student'=>$student);
        $user = User::all();
        $data=array('users'=>$user);
        $signature = signature::all();
        $data=array('signature'=>$signature);
        $crp = crp::all();
        $data=array('crp'=>$crp);
        return view('crp.list', compact('crp','crp'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('crp.create');
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
            'nombre_crp'=>'required',
        ]);
        $crp = new crp([
            'nombre_crp'=>$request->get('nombre_grado')
        ]);
        $crp->save();
        return redirect('/crp')->with('success', 'Grupo Añadido');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\crp  $crp
     * @return \Illuminate\Http\Response
     */
    public function show(crp $crp)
    {
        //
        return view('crp.view',compact('crp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\crp  $crp
     * @return \Illuminate\Http\Response
     */
    public function edit(crp $crp)
    {
        //
        return view('crp.edit',compact('crp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\crp  $crp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, crp $crp)
    {
        //
        $request->validate([
            'nombre_crp'=>'required'
        ]);
        $crp = crp::find($id);

            $crp->nombre_crp= $_REQUEST->get('nombre_crp');
   
        $crp->update();
 
        return redirect('/crp')->with('success', 'Grupo actualizado con éxito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\crp  $crp
     * @return \Illuminate\Http\Response
     */
    public function destroy(crp $crp)
    {
        //
        $crp->delete();
        return redirect('/crp')->with('success', 'Grupo Eliminado');
    }
}
