<?php

namespace App\Http\Controllers;

use App\Models\Liceo;
use App\Models\anioescolar;
use Illuminate\Http\Request;

class anioescolarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $liceo = Liceo::all();
        $data=array('liceo'=>$liceo);
        $crp = crp::all();
        $data=array('crp'=>$crp);
        
        $anioescolar = anioescolar::all();
        return view('anioescolar.list', compact('anioescolar','anioescolar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('anioescolar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // aqui debo insertar el nombre del año escolar concatenando año inicio con año de fin



        $request->validate([

            'txtnombreanioescolar'=>'required',
            'fechainicio'=>'required',
            'fechafin'=>'required',
            'liceo_id'=>'required'

        ]);

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anioescolar  $anioescolar
     * @return \Illuminate\Http\Response
     */
    public function show(anioescolar $anioescolar)
    {
        //
        $anioescolar = new Anioescolar([

            'txtnombreanioescolar'=> $request->get('txtnombreanioescolar'),
            'fechainicio'=> $request->get('fechainicio'),
            'fechafin'=> $request->get('fechafin'),
            'liceo_id'=> $request->get('liceo_id')
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anioescolar  $anioescolar
     * @return \Illuminate\Http\Response
     */
    public function edit(anioescolar $anioescolar)
    {
        //
        return view('anioescolar.edit',compact('anioescolar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\anioescolar  $anioescolar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, anioescolar $anioescolar)
    {
        //
        $request->validate([
            'txtnombreanioescolar'=>'required',
            'fechainicio'=>'required',
            'fechafin'=>'required',
            'liceo_id'=>'required'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anioescolar  $anioescolar
     * @return \Illuminate\Http\Response
     */
    public function destroy(anioescolar $anioescolar)
    {
        //
        $anioescolar->delete();
        return redirect('/anioescolar')->with('success', 'eliminado exitosamente');
    }
}
