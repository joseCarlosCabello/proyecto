@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actualizar leccion</div>

                <div class="card-body">

                <form action="{{route('proyecto.Leccion_update',$leccion)}}"
                enctype="multipart/form-data"
                method="POST">
                    @csrf @method('PATCH')
                    @if(session()->has('msj'))
                    <div class="alert alert-success">
                        <strong>Datos Actualizados!</strong>
                    </div>
                    @endif
                    <p>
                    <img src="/storage/{{$leccion->bandera}}" width="100px">
                </p>
                </div>
                    <p><label for="bandera">
                        <input type="file"name="bandera">
                    </label>
                </p>
                        <div class="form-group"> <!-- id -->
                            <label for="id" class="control-label">id</label>
                        <input type="int" class="form-control" id="id" name="id" placeholder="#"value="{{$leccion->id}}">
                            @if ($errors->has('id'))
                                <p>{{$errors->first('id')}}</p>
                            @endif
                        </div>

                        <div class="form-group"> <!-- nombre_leccion  -->
                            <label for="nombre_clase" class="control-label">Nombre leccion</label>
                            <input type="text" class="form-control" id="nombre_clase" name="nombre_clase" placeholder="nombre"value="{{$leccion->nombre_clase}}">
                            @if ($errors->has('nombre_clase'))
                                <p>{{$errors->first('nombre_clase')}}</p>
                             @endif
                        </div>

                        <div class="form-group"> <!-- id_profe  -->
                            <label for="profesor_id" class="control-label">id del profesor: </label>
                            <input type="int" class="form-control" id="profesor_id" name="profesor_id" placeholder="#"value="{{$leccion->profesor_id}}">
                            @if ($errors->has('profesor_id'))
                                <p>{{$errors->first('profesor_id')}}</p>
                             @endif
                        </div>

                        <div class="form-group"> <!-- horario-->
                            <label for="horario" class="control-label">Horario: </label>
                            <input type="text" class="form-control" id="horario" name="horario" placeholder="dia"value="{{$leccion->horario}}">
                            @if ($errors->has('horario'))
                                <p>{{$errors->first('horario')}}</p>
                            @endif
                        </div>

                        <div class="form-group"> <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Actualizar!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
