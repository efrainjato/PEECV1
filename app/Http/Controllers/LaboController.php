<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laboratorio;

class UsuarioController extends Controller
{
	public function store(Request $request)
	{
    	$this->validate($request, ['nombre' => 'required','profesion' => 'required', 'telefono' => 'required','direccion' => 'required', 'email' => 'required' ,'fecha_nac' => 'required','curp' => 'required']);
        
        //create new message

        $responsable = new Laboratorio;
        $responsable->nombre = $request->input('nombre');
        $responsable->profesion = $request->input('profesion');
        $responsable->telefono = $request->input('telefono');
        $responsable->direccion = $request->input('direccion');
        $responsable->email = $request->input('email');        
        $responsable->fecha_nac = $request->input('fecha_nac');
        $responsable->curp = $request->input('curp');
        //save Message
        $responsable->save();

        //redireccionamos
        return redirect('/')->with('success', 'Usuario Registrado');

	}
}
