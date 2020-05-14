@extends('layouts.tema2')
@section('titulo','alumnos')

@section('content')
    <h1>{{$titulo}}</h1>
    <ul>
        @forelse ($alumnos as $alumno)
            <li>
                {{$alumno->nombre}},id  {{$alumno->id}}
            <a href="{{route('proyecto.show',$id=$alumno->id)}}"> Ver detalles</a>
            </li>
        @empty
            <li>no hay alumnos</li>
        @endforelse
    </ul>
@endsection
@section('name')
    @parent
@endsection

