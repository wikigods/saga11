<?php

namespace App\Http\Controllers;


use App\Models\student_signature;
use Illuminate\Http\Request;

class student_signatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::all();
        $data=array('student'=>$student);
        $user = User::all();
        $data=array('users'=>$user);
        $signature = signature::all();
        $data=array('signature'=>$signature);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_signature  $student_signature
     * @return \Illuminate\Http\Response
     */
    public function show(student_signature $student_signature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_signature  $student_signature
     * @return \Illuminate\Http\Response
     */
    public function edit(student_signature $student_signature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student_signature  $student_signature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_signature $student_signature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_signature  $student_signature
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_signature $student_signature)
    {
        //
    }
}
