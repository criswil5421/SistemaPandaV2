@extends('adminlte::page')

@section('title', 'create')
  

@section('content_header')
    <h1>Asistencia Create</h1>
@stop

@section('content')
    <form action="{{route('asistencia.store')}}" method="POST">

        @csrf

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">trabajador_id: </label>
            <input type="text" name="trabajador_id" class="form-control" id="" value="{{old('name')}}" placeholder="trabajador">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">Estado</label>
            <input type="text" name="estado" class="form-control" id="" value="{{old('estado')}}" placeholder="estado">
          </div>
          <div class="form-group col-md-6">
            <label for="inputEmail4">fecha: </label>
            <input type="date" name="fecha" class="form-control" id="" value="{{old('fecha')}}" placeholder="fecha">
          </div>
        
        
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    
@endsection