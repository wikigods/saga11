<?php

namespace App\Http\Controllers;

use App\Models\Liceo;
use Illuminate\Http\Request;
use App\Models\anioescolar;

class LiceoController extends Controller
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
                return view('liceo.list', compact('liceo','liceo'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('liceo.create');
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

            'txtCodigoPlantel'=>'required',
            'txtNombreLiceo'=>'required',
            'txtDireccionLiceo'=>'required',
            'txtTelefonoLiceo'=>'required',
            'txtMunicipio'=>'required',
            'txtDistritoFederal'=>'required',
            'txtZonaEducativa'=>'required',
            'txtDirectorLiceo'=>'required',
            'txtCedulaDirector'=>'required'

        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Liceo  $liceo
     * @return \Illuminate\Http\Response
     */
    public function show(Liceo $liceo)
    {
        //`
        $liceo = new Liceo([

            'txtCodigoPlantel'=> $request->get('txtCodigoPlantel'),
            'txtNombreLiceo'=> $request->get('txtNombreLiceo'),
            'txtDireccionLiceo'=> $request->get('txtDireccionLiceo'),
            'txtTelefono'=> $request->get('txtTelefono'),
            'txtMunicipio'=> $request->get('txtMunicipio'),
            'txtDistritoFederal'=> $request->get('txtDistritoFederal'),
            'txtZonaEducativa'=> $request->get('txtZonaEducativa'),
            'txtDirector'=> $request->get('txtDirector'),
            'txtCedulaDirector'=> $request->get('txtCedulaDirector')


        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Liceo  $liceo
     * @return \Illuminate\Http\Response
     */
    public function edit(Liceo $liceo)
    {
        //
        return view('liceo.edit',compact('liceo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Liceo  $liceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Liceo $liceo)
    {
        //
        $request->validate([
            'txtCodigoPlantel'=>'required',
            'txtNombreLiceo'=>'required',
            'txtDireccionLiceo'=>'required',
            'txtTelefonoLiceo'=>'required',
            'txtMunicipio'=>'required',
            'txtDistritoFederal'=>'required',
            'txtZonaEducativa'=>'required',
            'txtDirectorLiceo'=>'required',
            'txtCedulaDirector'=>'required'
        ]);
  
        $liceo = Liceo::find($id);
        $liceo-> CodigoPlantel = $request->get('txtCodigoPlantel');
        $liceo-> NombreLiceo= $request->get('txtNombreLiceo');
        $liceo-> DireccionLiceo= $request->get('txtDireccionLiceo');
        $liceo-> Telefono= $request->get('txtTelefonoLiceo');
        $liceo-> Municipio= $request->get('txtMunicipio');
        $liceo-> DistritoFederal= $request->get('txtDistritoFederal');
        $liceo-> ZonaEducativa= $request->get('txtZonaEducativa');
        $liceo-> NombreDirector= $request->get('txtDirectorLiceo');
        $liceo-> CedulaDirector= $request->get('txtCedulaDirector');

        $liceo->update();
 
        return redirect('/liceo')->with('success', 'Los datos se han actualizado Correctamente...!!');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Liceo  $liceo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Liceo $liceo)
    {
        //
        $liceo->delete();
        return redirect('/liceo')->with('success', 'eliminado exitosamente');

    }
}
