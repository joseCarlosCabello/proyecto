@extends('layouts.tema2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">crear maestro</div>

                <div class="card-body">

                <form action="{{route('proyecto.Maestro_update',$maestro)}}"method="POST">
                    @csrf @method('PATCH')
                        <div class="form-group"> <!-- id -->
                            <label for="id" class="control-label">id</label>
                        <input type="id" class="form-control" id="id" name="id" placeholder="#"value="{{$maestro->id}}">
                            @if ($errors->has('id'))
                                <p>{{$errors->first('id')}}</p>
                            @endif
                        </div>


                        <div class="form-group"> <!-- nombre-->
                            <label for="nombre" class="control-label">nombre: </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo"value="{{$maestro->nombre}}">
                            @if ($errors->has('nombre'))
                                <p>{{$errors->first('nombre')}}</p>
                            @endif
                        </div>


                        <div class="form-group"> <!-- horario -->
                            <label for="horario" class="control-label">horario: </label>
                            <input type="string" class="form-control" id="horario" name="horario" placeholder="horario"value="{{$maestro->horario}}">
                            @if ($errors->has('horario'))
                                <p>{{$errors->first('horario')}}</p>
                            @endif
                        </div>

                        <div class="form-group"> <!-- horas -->
                            <label for="horas" class="control-label">Horas: </label>
                            <input type="integer" class="form-control" id="horas" name="horas" placeholder="horas"value="{{$maestro->horas}}">
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
