
@extends('layouts.admi')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">crear alumno</div>

                <div class="card-body">

                <form action="{{route('proyecto.Update_alumno',$alumno)}}"method="POST">
                    @csrf @method('PATCH')
                    @if(session()->has('msj'))
                    <div class="alert alert-success">
                        <strong>Datos Actualizados!</strong>
                    </div>
                    @endif
                        <div class="form-group"> <!-- id -->
                            <label for="ID" class="control-label">id</label>
                            <input type="int" class="form-control" id="ID" name="id" placeholder="#"value="{{$alumno->id}}">
                            @if ($errors->has('id'))
                                <p>{{$errors->first('id')}}</p>
                            @endif
                        </div>

                        <div class="form-group"> <!-- Nombre-->
                            <label for="nombre" class="control-label">nombre: </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo"value="{{$alumno->nombre}}">
                            @if ($errors->has('nombre'))
                                <p>{{$errors->first('nombre')}}</p>
                            @endif
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
