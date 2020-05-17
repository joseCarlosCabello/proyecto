
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

                        <div class="form-group"> <!-- id_alumno  -->
                            <label for="id_clase" class="control-label">ID clase</label>
                            <input type="int" required exist:leccion,id class="form-control" id="id_clase" name="id_clase" placeholder="###"value="{{old('id_clase')}}">
                            @if ($errors->has('id_clase'))
                                <p>{{$errors->first('id_clase')}}</p>
                             @endif
                        </div>
                        <div class="form-group"> <!-- id_alumno  -->
                            <label for="id_alumno" class="control-label">ID alumno</label>
                            <input type="int" required exist:leccion,id  class="form-control" id="id_alumno" name="id_alumno" placeholder="###"value="{{old('id_alumno')}}">
                            @if ($errors->has('id_alumno'))
                                <p>{{$errors->first('id_alumno')}}</p>
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
