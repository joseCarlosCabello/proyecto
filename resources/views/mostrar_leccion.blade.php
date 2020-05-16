@extends('layouts.admi')

@section('content')

<!-- ============================================================== -->
<!-- striped table -->
<!-- ============================================================== -->
<div class="col-xl-9 col-lg-6 col-md-12 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Clase</h5>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Horario</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$leccion->id}}</th>
                        <td>{{$leccion->nombre_clase}}</td>
                        <td>{{$leccion->horario}}</td>
                        <td><a href="{{ route ('proyecto.Leccion_editar',$leccion->id) }}" class="btn btn-outline-primary">Editar</a></td>
                        <td>
                        <form action="{{ route ('proyecto.Leccion_destroy',$leccion->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type=submit class="btn btn-outline-danger" onclick="return confirm('¿Esta seguro de que desea eliminar?');">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end striped table -->
<!-- ============================================================== -->
@endsection
