@extends('adminlte::page')

@section('title', 'create')
  

@section('content_header')
    <h1>Dashboard ventas</h1>
@stop

@section('content')
    <h1>bienvenido a la pagina para crear cursos</h1>
    <form action="{{route('asistencia.store')}}" method="POST">
        
        @csrf

        <label for="">
            trabajador_id: 
            <br>
            <input type="text" name="trabajador_id" value="{{old('trabajador_id')}}">
        </label>

        @error('trabajador_id')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            estado: 
            <br>
            <textarea rows="5" name="estado">{{old('estado')}}</textarea>
        </label>

        @error('estado')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            fecha: 
            <br>
            <input type="date" name="fecha" value="{{old('fecha')}}">
        </label>

        @error('fecha')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>

        <button type="submit">Enviar Formulario</button>
    </form>
    
@endsection