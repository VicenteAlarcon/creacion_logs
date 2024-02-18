@extends('layouts.layout')
@section('contenido')
<h1>Registro de actividades</h1>
@foreach($logs as $log)
<ul>
    <li>Name: {{ $log->name }}</li>
    <li>Description: {{ $log->description }}</li>
</ul>
@endforeach

@endsection