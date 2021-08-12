@extends('layouts.plantilla')

@section('title', 'cursos edit')
    
@section('content')
    <h1>en esta pagina podras editar cursos</h1>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
        
        @csrf

        @method('put')

        <label for="">
            Nombre: 
            <br>
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>

        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            descripcion: 
            <br>
            <textarea rows="5" name="descripcion"> {{old('descripcion', $curso->descripcion)}}</textarea>
        </label>

        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <label for="">
            categoria: 
            <br>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">actualizar Formulario</button>
    </form>
    
@endsection