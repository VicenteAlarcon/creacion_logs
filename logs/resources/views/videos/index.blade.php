@extends('layouts.layout')
@section('contenido')

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Duración</th>
    </tr>
  </thead>
  <tbody>
    @foreach($videos as $video)
    <tr>
      <th scope="row">{{$video->id}}</th>
      <td>{{$video->name}}</td>
      <td>{{$video->category}}</td>
      <td>{{$video->duration}}</td>
    </tr>
  @endforeach
  </tbody>
</table>

@endsection


