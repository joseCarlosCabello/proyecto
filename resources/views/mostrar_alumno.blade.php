@extends('layouts.app')
@section('tittle',"Alumno {$alumno->id}")
@section('content')
    <h1>Alumno#{{$alumno->id}}</h1>
    <p>Nombre del alumno:  {{$alumno->nombre}}</p>
    <p>
        <a href="{{action('controlador@index')}}"> Regresar</a>
    </p>
@endsection
