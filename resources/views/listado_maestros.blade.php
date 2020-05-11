@extends('layouts.app')
@section('titulo','maestros')

@section('content')
    <h1>{{$titulo}}</h1>
    <ul>
        @forelse ($maestros as $maestro)
            <li>
                {{$maestro->nombre}},id  {{$maestro->id}}
            <a href="{{route('proyecto.Maestro_show',$maestro)}}"> Ver detalles</a>
            <a href="{{route('proyecto.Maestro_editar',$maestro)}}"> Editar</a>
            <form action="{{route('proyecto.Maestro_destroy',$maestro)}}"method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit">Eliminar</button>
            </form>
            </li>
        @empty
            <li>no hay maestros</li>
        @endforelse
    </ul>
@endsection
@section('name')
    @parent
@endsection
