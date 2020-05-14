<?php

namespace App\Http\Controllers;

use App\clase;
use Illuminate\Http\Request;
use App\models\Alumno;
use App\models\Leccion;
use App\models\Maestro;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;


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

    public function index_deleted()
    {
        $alumnos=Alumno::onlyTrashed()->get(); //se toman todos los alumnos de la tabla alumno
        $titulo='listado de alumnos';
        return view('listado_alumnos_eliminados',compact('titulo','alumnos'));//retorna la vista y se "retorna" el titulo y los alumnos
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
            'nombre'=>'required',
        ],[
            'nombre.required'=>'el campo nombre es obligatorio',

        ]
    );
        $alumno=new Alumno();
        $alumno->id  =  $request->id;                 //= \Auth::id();
        $alumno->nombre = $request->nombre;
        $alumno->save();
        return redirect()->route('form_alumno');
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
    public function edit(Alumno $alumno)
    {
        return view('editar_alumno',['alumno'=>$alumno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Alumno $alumno)
    {
        return $alumno;

    }
    public function editar_alumno(Alumno $alumno)
    {
        return view('editar_alumno',['alumno'=>$alumno]);
    }
    public function update_alumno(Alumno $alumno)
    {
        $data=request()->validate([
           // 'id'=>'required|integer',
            'nombre'=>'required',
            'contraseña'=>'',
            'horas'=>'required'
        ]
        ,[
           // 'id.required'=>'el campo id es obligatorio',
           // 'id.required'=>'el campo id debe de ser un numero',
            'nombre.required'=>'el campo nombre es obligatorio',
            'contraseña.required'=>'el campo contraseña es obligatorio'
        ]);
        if($data['contraseña']!=null)
        {
            $data['contraseña']=bcrypt($data['contraseña']);
        }
        else
        {
            unset($data['contraseña']);
        }
        $alumno->update($data);
        return redirect()->route('form_alumno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumno $alumno)
    {
        return dd($alumno);
        $alumno->delete();
        return redirect()->route('proyecto.index');
    }
    public function restore($id)
    {
       $restore = Alumno::withTrashed()->where('id', '=', $id)->first();
       $restore->restore();
        return redirect()->route('proyecto.index');
    }

    public function Alumno_destroy(Alumno $alumno)
    {
        $alumno->delete();
        return redirect()->route('proyecto.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

/****************lecciones */

public function Leccion_index()
{
    $lecciones=Leccion::all(); //se toman todos los alumnos de la tabla alumno
    $titulo='listado de clases';
    return view('listado_lecciones',compact('titulo','lecciones'));//retorna la vista y se "retorna" el titulo y los alumnos
}
public function Leccion_index_deleted()
{
    $lecciones=Leccion::onlyTrashed()->get(); //se toman todos los alumnos de la tabla alumno
    $titulo='listado de lecciones';
    return view('listado_lecciones_eliminadas',compact('titulo','lecciones'));//retorna la vista y se "retorna" el titulo y los alumnos
}

public function LEccion_show($id)
{
    $leccion=Leccion::findOrFail($id);

    return view('mostrar_leccion',compact('leccion'));
}
    public function Leccion_store(Request $request)
    {


        $data=request()->validate([
            'nombre_clase'=>'required',
            'profesor_id'=>'required|integer',
            'horario'=>'required'
        ],[

            'nombre_clase.required'=>'el campo nombre es obligatorio',
            'profesor_id.required'=>'el campo profesor es obligatorio',
            'profesor.integer'=>'el campo id maestro debe de ser un numero',
            'horario.required'=>'el campo horario es obligatorio'
        ]
    );
        $leccion=new Leccion();
        $leccion->id = $request->id;
        $leccion->nombre_clase = $request->nombre_clase;
        $leccion->profesor_id = $request->profesor_id;
        $leccion->horario = $request->horario;

        if($request->hasFile('bandera'))
        {
            $leccion->bandera=$request->file('bandera')->store('public');
        }

        if($leccion->save())
        {
            return redirect()->route('form_leccion')->with('msj','datos guardados');
        }
        else{
        return redirect()->route('form_leccion');
        }


    }
    public function Leccion_editar(Leccion $leccion)
    {
        return view('editar_leccion',['leccion'=>$leccion]);
    }
   /* public function Leccion_update(Request $request,Leccion $leccion)
    {
        $leccion->update([
            'id'=>request('id'),
            'nombre_clase'=>request('nombre_clase'),
            'profesor_id'=>request('profesor_id'),
            'horario'=>request('horario')
        ]);
        return redirect()->route('form_leccion');
    }*/
    public function Leccion_update(Leccion $leccion)
    {

        $data=request()->validate([
            'nombre_clase'=>'required',
            'profesor_id'=>'required',
            'horario'=>'required',
            'bandera'
        ]);
        $leccion->update($data);
        return redirect()->route('form_leccion');
    }

    public function Leccion_destroy(Leccion $leccion)
    {
        $leccion->delete();
        return redirect()->route('proyecto.Leccion_index');
    }
    public function Leccion_restore($id)
    {
       $restore = Leccion::withTrashed()->where('id','=', $id)->first();
       $restore->restore();
        return redirect()->route('proyecto.Leccion_index');
    }
    //****************


    //***********formulario maestro */


    public function Maestro_index()
    {
        $maestros=Maestro::all(); //se toman todos los alumnos de la tabla alumno
        $titulo='listado de maestros';
        return view('listado_maestros',compact('titulo','maestros'));//retorna la vista y se "retorna" el titulo y los alumnos
    }
    public function Maestro_index_deleted()
    {
        $maestros=Maestro::onlyTrashed()->get(); //se toman todos los alumnos de la tabla alumno
        $titulo='listado de maestros';
        return view('listado_maestros_eliminados',compact('titulo','maestros'));//retorna la vista y se "retorna" el titulo y los alumnos
    }

    public function Maestro_show($id)
    {
        $maestro=Maestro::findOrFail($id);

        return view('mostrar_maestro',compact('maestro'));
    }

    public function Maestro_store(Request $request)
    {
        $data=request()->validate([
            'nombre'=>'required',
            'horario'=>'required'
        ],[
            'nombre.required'=>'el campo nombre es obligatorio',
            'horario.required'=>'el campo horario es obligatorio'
        ]
    );
        $maestro=new Maestro();
        $maestro->id = $request->id;
        $maestro->nombre = $request->nombre;
        $maestro->horario = $request->horario;
        $maestro->horas = $request->horas;
        $maestro->save();
        return redirect()->route('form_maestro');
    }
   /*

    public function Maestro_update(Request $request,Maestro $maestro)
    {
        $maestro->update([
            'id'=>request('id'),
            'nombre'=>request('nombre'),
            'horario'=>request('horario'),
            'horas'=>request('horas'),
        ]);
        return redirect()->route('form_maestro');

    }*/
    public function Maestro_editar(Maestro $maestro)
    {
        return view('editar_maestro',['maestro'=>$maestro]);
    }
    public function Maestro_update(Maestro $maestro)
    {
        $data=request()->validate([
            //'id'=>'required|integer',
            'nombre'=>'required',
            'horario'=>'required'
        ],[
           // 'id.required'=>'el campo id es obligatorio',
            //'id.required'=>'el campo id debe de ser un numero',
            'nombre.required'=>'el campo nombre es obligatorio',
            'horario.required'=>'el campo horario es obligatorio'
        ]
    );

        $maestro->update($data);
        return redirect()->route('form_maestro');
    }
    public function Maestro_destroy(Maestro $maestro)
    {
        $maestro->delete();
        return redirect()->route('proyecto.Maestro_index');
    }
    public function Maestro_restore($id)
    {
       $restore = Maestro::withTrashed()->where('id', '=', $id)->first();
       $restore->restore();
         return redirect()->route('proyecto.Maestro_index');
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
