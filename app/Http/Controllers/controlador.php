<?php

namespace App\Http\Controllers;

use App\clase;
use Illuminate\Http\Request;
use App\models\Alumno;


class controlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos=Alumno::all(); //se toman todos los alumnos de la tabla alumno
        $titulo='listado de alumnos';
        return view('listado_alumnos',compact('titulo','alumnos'));//retorna la vista y se "retorna" el titulo y los alumnos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=request()->validate([
            'id'=>'required',
            'nombre'=>'required',
            'contraseña'=>'required'
        ],[
            'id.required'=>'el campo id es obligatorio',
            'nombre.required'=>'el campo nombre es obligatorio',
            'contraseña.required'=>'el campo contraseña es obligatorio'
        ]
    );
        $alumno=new Alumno();
        $alumno->id  =  $request->id;                 //= \Auth::id();
        $alumno->nombre = $request->Nombre;
        $alumno->contraseña = bcrypt($request->contraseña);
        $alumno->horas = $request->horas;
        $alumno->save();
        return view('formulario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno=Alumno::findOrFail($id);

        return view('mostrar_alumno',compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Clase_store(Request $request)
    {
        $data=request()->validate([
            'id_clase'=>'required',
            'nombre_clase'=>'required',
            'profesor_id'=>'required',
            'horario'=>'required'
        ],[
            'id_clase.required'=>'el campo id es obligatorio',
            'nombre_clase.required'=>'el campo nombre es obligatorio',
            'profesor_id.required'=>'el campo profesor es obligatorio',
            'horario.required'=>'el campo horario es obligatorio'
        ]
    );
        $clase=new Clase();
        $clase->id_clase = $request->id_clase;
        $clase->nombre_clase = $request->nombre_clase;
        $clase->profesor_id = $request->profesor_id;
        $clase->horario = $request->horario;
        $clase->save();
        return view('formulario_clase');

    }
}
