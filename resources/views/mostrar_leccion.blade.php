@extends('layouts.app')
@section('tittle',"Leccion {$leccion->id}")
@section('content')
    <h1>Leccion#{{$leccion->id}}</h1>
    <p>Nombre de la leccion:  {{$leccion->nombre_clase}}</p>
    <p>
        <a href="{{action('controlador@Leccion_index')}}"> Regresar</a>
    </p>
@endsection
