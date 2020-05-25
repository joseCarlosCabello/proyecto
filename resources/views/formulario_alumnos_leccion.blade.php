
@extends('layouts.admi')

@section('content')
<div class="card">
    <h5 class="card-header">Inscribir alumno</h5>
    <div class="card-body">


                <form action="{{route('proyecto.Incsipcion_store')}}"
                enctype="multipart/form-data"
                method="POST">
                    @csrf
                        @if(session()->has('msj'))
                        <div class="alert alert-success">
                            <strong>Datos registrados!</strong>
                        </div>
                        @endif

                        <div  class="form-group col-xs-4">
                            <label id="modal_elem" for="id_clase">Leccion</label>

                                <select id="id_clase" name="id_clase" class="form-control">

                                @foreach($leccions as $leccion)
                                    <option value="{{$leccion->id}}">{{$leccion->nombre}}</option>
                                 @endforeach
                                </select>
                            </div>

                            <div  class="form-group col-xs-4">
                                <label id="modal_elem" for="id_alumno">Leccion</label>

                                    <select id="id_clase" name="id_clase" class="form-control">

                                    @foreach($alumnos as $alumno)
                                        <option value="{{$alumno->id}}">{{$alumno->nombre}}</option>
                                     @endforeach
                                    </select>
                                </div>
                        <div class="form-group"> <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Registrar!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
