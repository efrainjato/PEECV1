<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsable;

class UsuarioController extends Controller
{
    /**
    *Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
    	//
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
    	
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(Request $request)
    {
    	$this->validate($request, ['nombre' => 'required','profesion' => 'required', 'telefono' => 'required','direccion' => 'required', 'email' => 'required' ,'fecha_nac' => 'required','curp' => 'required', 'password' => 'required']);
        
        //create new message

        $responsable = new Responsable;
        $responsable->nombre = $request->input('nombre');
        $responsable->profesion = $request->input('profesion');
        $responsable->telefono = $request->input('telefono');
        $responsable->direccion = $request->input('direccion');
        $responsable->email = $request->input('email');        
        $responsable->fecha_nac = $request->input('fecha_nac');
        $responsable->curp = $request->input('curp');
        $responsable->password = $request->input('password');
        //save Message
        $responsable->save();

        //redireccionamos
        return redirect('/')->with('success', 'Usuario Registrado');
    }

    /**
    *Display the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function show($id)
    {
    	//
    }

    /**
    *Show the form for editing the specified resource.
    *
    * @param int $id
    * @return Response
    */
    public function edit($id)
    {
    	//
    }

    /**
    * Update the specified resource in storage.
    *
    * @param int $id
    * @return Response
    */
    public function update($id)
    {
    	//
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return Response
    */
    public function destroy($id)
    {
    	//
    }    
}
