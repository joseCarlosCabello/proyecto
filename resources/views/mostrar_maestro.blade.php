@extends('layouts.app')
@section('tittle',"Maestro {$maestro->id}")
@section('content')
    <h1>Maestro#{{$maestro->id}}</h1>
    <p>Nombre del maestro:  {{$maestro->nombre}}</p>
    <p>
        <a href="{{action('controlador@Maestro_index')}}"> Regresar</a>
    </p>
@endsection
