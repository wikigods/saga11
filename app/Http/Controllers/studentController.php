<?php

namespace App\Http\Controllers;

use App\Models\seccion;
use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seccion = Seccion::all();
        $data=array('seccion'=>$seccion);
        $students = Student::all();
        return view('student.list', compact('students','students'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');



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
            'cedula'=>'required',
            'apellidos'=> 'required',
            'nombres' => 'required',
            'lugarnac' => 'required',
            'estadonac' => 'required',
            'fechanac' => 'required',
            'sexo' => 'required',
            
        ]);
 
        $student = new Student([
            'cedula' => $request->get('cedula'),
            'apellidos'=> $request->get('apellidos'),
            'nombres'=> $request->get('nombres'),
            'lugarnac'=> $request->get('lugarnac'),
            'estadonac'=> $request->get('estadoaac'),
            'fechanac'=> $request->get('fechanac'),
            'sexo'=> $request->get('sexo'),

        ]);
 
        $student->save();
        return redirect('/student')->with('success', 'Estudiante añadido con éxito');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
        return view('student.view',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
        $request->validate([
            'cedula'=>'required',
            'apellidos'=> 'required',
            'nombres' => 'required',
            'lugarnac' => 'required',
            'estadonac' => 'required',
            'fechanac' => 'required',
      
        ]);
 
 
        $student = Student::find($id);
        $student->cedula = $request->get('cedula');
        $student->apellidos= $request->get('apellidos');
        $student->nombres= $request->get('nombres');
        $student->lugarnac= $request->get('lugarnac');
        $student->estadonac= $request->get('estadonac');
        $student->fechanac= $request->get('fechanac');


        $student->update();
 
        return redirect('/student')->with('success', 'Datos del Estudiante modificados Exitosamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
        $student->delete();
        return redirect('/student')->with('success', 'Los datos fueron eliminados exitosamente');

    }
}
