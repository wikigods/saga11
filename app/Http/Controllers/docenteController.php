<?php

namespace App\Http\Controllers;

use App\Models\docente;
use App\Models\signature;
use App\Models\student;
use App\Models\crp;
use Illuminate\Http\Request;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $docente = docente::all();
        $data=array('docente'=>$docente);
        $signature = signature::all();
        $data=array('signature'=>$signature);
        $crp = crp::all();
        $data=array('crp'=>$crp);
        $docente = $docente::all();
        return view('docente.list', compact('docente','docente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('docente.create');
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
            'cedula_docente'=>'required',
            'apellidos_docente'=> 'required',
            'nombres_docente' => 'required'
        ]);
 
        $docente = new docente([
            'cedula_docente' => $request->get('cedula_docente'),
            'apellidos_docente'=> $request->get('apellidos_docente'),
            'nombres_docente'=> $request->get('nombres_docente')
        ]);
 
        $docente->save();
        return redirect('/docente')->with('success', 'Añadido con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(docente $docente)
    {
        //
        return view('docente.view',compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit(docente $docente)
    {
        //
        return view('docente.edit',compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docente $docente)
    {
        //
 
        $request->validate([
            'cedula_docente'=>'required',
            'apellidos_docente'=> 'required',
            'nombres_docente' => 'required'
        ]);
 
 
        $docente = docente::find($id);
        $docente->cedula_docente = $request->get('cedula_docente');
        $docente->apellidos_docente = $request->get('apellidos_docente');
        $docente->nombres_docente = $request->get('nombres_docente');
 
        $docente->update();
 
        return redirect('/docente')->with('success', 'los datos fueron actualizados exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy(docente $docente)
    {
        //
        $docente->delete();
        return redirect('/docente')->with('success', 'los datos han sido actualizados exitosamente');

    }
}
