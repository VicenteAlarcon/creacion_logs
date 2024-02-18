@extends('layouts.layout')
@section('contenido')

<form action="{{route('videos.store')}}" method="post">
    @csrf
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">category</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword3" name="category">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">category</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="inputPassword3" name="duration">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection
