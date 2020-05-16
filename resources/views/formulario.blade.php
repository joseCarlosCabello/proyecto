@extends('layouts.admi')

@section('content')
<div class="card">
    <h5 class="card-header">Registrar alumno</h5>
    <div class="card-body">
        <form action="{{route('proyecto.store')}}"method="POST">
            @csrf
            @if(session()->has('msj'))
            <div class="alert alert-success">
                <strong>Datos registrados!</strong>
            </div>
            @endif

                <div class="form-group"> <!-- Nombre-->
                    <label for="nombre" class="control-label">nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo"value="{{old('nombre')}}">
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
