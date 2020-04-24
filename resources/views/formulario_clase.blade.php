@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">crear Clase</div>

                <div class="card-body">

                <form action="{{route('proyecto.Clase_store')}}"method="POST">
                    @csrf
                        <div class="form-group"> <!-- id -->
                            <label for="id_clase" class="control-label">id_clase</label>
                            <input type="int" class="form-control" id="id_clase" name="id_clase" placeholder="#"value="{{old('id_clase')}}">
                            @if ($errors->has('id_clase'))
                                <p>{{$errors->first('id_clase')}}</p>
                            @endif
                        </div>

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

                        <div class="form-group"> <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Registrar!</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
