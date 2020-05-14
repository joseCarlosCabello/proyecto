@extends('layouts.admi')

@section('content')
<div class="card">
    <h5 class="card-header">registrar maestro</h5>
    <div class="card-body">

                <form action="{{route('proyecto.Maestro_store')}}"method="POST">
                    @csrf


                        <div class="form-group"> <!-- nombre-->
                            <label for="nombre" class="control-label">nombre: </label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo"value="{{old('nombre')}}">
                            @if ($errors->has('nombre'))
                                <p>{{$errors->first('nombre')}}</p>
                            @endif
                        </div>


                        <div class="form-group"> <!-- horario -->
                            <label for="horario" class="control-label">horario: </label>
                            <input type="string" class="form-control" id="horario" name="horario" placeholder="horario"value="{{old('horario')}}">
                            @if ($errors->has('horario'))
                                <p>{{$errors->first('horario')}}</p>
                            @endif
                        </div>

                        <div class="form-group"> <!-- horas -->
                            <label for="horas" class="control-label">Horas: </label>
                            <input type="integer" class="form-control" id="horas" name="horas" placeholder="horas"value="{{old('horas')}}">
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
