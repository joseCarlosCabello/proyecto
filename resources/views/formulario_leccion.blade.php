@extends('layouts.admi')
@if(session()->has('msj'))
<div class="alert alert-success">
    <strong>Datos registrados!</strong>
  </div>

@endif
@section('content')
<div class="card">
    <h5 class="card-header">Dar de alta leccion</h5>
    <div class="card-body">

                <form action="{{route('proyecto.Leccion_store')}}"
                enctype="multipart/form-data"
                method="POST">
                    @csrf


                        <div class="form-group"> <!-- nombre_clase  -->
                            <label for="nombre_clase" class="control-label">Nombre clase</label>
                            <input type="text" class="form-control" id="nombre_clase" name="nombre_clase" placeholder="nombre"value="{{old('nombre_clase')}}">
                            @if ($errors->has('nombre_clase'))
                                <p>{{$errors->first('nombre_clase')}}</p>
                             @endif
                        </div>

                        <div class="form-group"> <!-- id_profe  -->
                            <label for="profesor_id" class="control-label">id del profesor: </label>
                            <input type="int" class="form-control" id="profesor_id" name="profesor_id" placeholder="#"value="{{old('profesor_id')}}">
                            @if ($errors->has('profesor_id'))
                                <p>{{$errors->first('profesor_id')}}</p>
                             @endif
                        </div>

                        <div class="form-group"> <!-- horario-->
                            <label for="horario" class="control-label">Horario: </label>
                            <input type="text" class="form-control" id="horario" name="horario" placeholder="dia"value="{{old('horario')}}">
                            @if ($errors->has('horario'))
                                <p>{{$errors->first('horario')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
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
