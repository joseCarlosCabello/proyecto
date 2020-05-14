@extends('layouts.tema2')
@section('titulo','lecciones')

@section('content')
    <h1>{{$titulo}}</h1>
    <ul>
        @forelse ($lecciones as $leccion)
            <li>
                {{$leccion->nombre_clase}},id  {{$leccion->id}}
            <a href="{{route('proyecto.Leccion_show',$leccion)}}"> Ver detalles</a>
            <a href="{{route('proyecto.Leccion_editar',$leccion)}}"> Editar</a>
            <form action="{{route('proyecto.Leccion_destroy',$leccion)}}"method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit">Eliminar</button>
            </form>
            </li>
        @empty
            <li>no hay lecciones</li>
        @endforelse
    </ul>
@endsection
@section('name')
    @parent
@endsection
