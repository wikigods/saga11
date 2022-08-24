<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\signature;
use App\Models\crp;
use App\Models\anioescolar;
use App\Models\seccion;
use Illuminate\Http\Request;

class userController extends Controller
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
        $signature = signature::all();
        $data=array('signature'=>$signature);
        $crp = crp::all();
        $data=array('crp'=>$crp);
        $user = Users::all();
        return view('user.list', compact('users','users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
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
            'name'=> 'required',
            'lastname' => 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'cargo'=> 'required',
            'password' => 'required'

        ]);
 
        $user = new User([
            'cedula' => $request->get('cedula'),
            'name'=> $request->get('name'),
            'lastname'=> $request->get('lastname'),
            'phone'=> $request->get('phone'),
            'email'=> $request->get('email'),
            'cargo'=> $request->get('cargo'),
            'password' => $request ->get('password')
        ]);
 
        $user->save();
        return redirect('/users')->with('success', 'Usuario Añadido con exito..!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        return view('users.view',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //

    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'cedula'=>'required',
            'name'=> 'required',
            'lastname' => 'required',
            'phone'=> 'required',
            'email'=> 'required',
            'cargo'=> 'required',
            'password' => 'required'
        ]);
 
 
        $user = User::find($id);
        $user->cedula = $request->get('cedula');
        $user->name = $request->get('name');
        $user->lastname= $request->get('lastname');
        $user-> phone = $request->get('phone');
        $user->email= $request->get('email');
        $user->cargo= $request->get('cargo');
        $user->password = $request ->get('password');
 
        $user->update();
 
        return redirect('/users')->with('success', 'datos del usuario actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect('/users')->with('success', 'Los datos fueron eliminados exitosamente');

    }


}