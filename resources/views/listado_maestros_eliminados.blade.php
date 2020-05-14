@extends('layouts.tema2')

@section('content')

<!-- ============================================================== -->
<!-- striped table -->
<!-- ============================================================== -->
<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Maestros</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maestros as $maestro)
                    <tr>
                        <th scope="row">{{$maestro->id}}</th>
                        <td>{{$maestro->nombre}}</td>
                        <td><a href="{{ route('proyecto.Maestro_restore',$maestro)}}" class="btn btn-outline-info">Restaurar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end striped table -->
<!-- ============================================================== -->
@endsection


