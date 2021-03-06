@extends('layouts.admi')

@section('content')

<!-- ============================================================== -->
<!-- striped table -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Maestros</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Horario</th>
                        <th scope="col">Horas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maestros as $maestro)
                    <tr>
                        <th scope="row">{{$maestro->id}}</th>
                        <td>{{$maestro->nombre}}</td>
                        <td>{{$maestro->horario}}</td>
                        <td>{{$maestro->horas}}</td>
                        <td><a href="{{ route('proyecto.Maestro_show',$maestro)}}" class="btn btn-outline-info">Detalle</a></td>
                        <td><a href="{{ route('proyecto.Maestro_leccion_index',$maestro)}}" class="btn btn-outline-info">Clases</a></td>
                        <td><a href="{{ route('proyecto.Maestro_json',$maestro)}}" class="btn btn-outline-info">Json</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p>

            </p>
        <td><a href="{{ route('proyecto.Download_pdf')}}" class="btn btn-outline-info">Lista en pdf</a></td>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end striped table -->
<!-- ============================================================== -->
@endsection
