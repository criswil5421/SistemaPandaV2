@extends('layouts.plantilla')

@section('title', 'show')
    
@section('content')
    <a href="{{route('cursos.index')}}">volver a cursos</a>
    <br>
    <a href="{{route('cursos.edit', $curso)}}">Editar Curso</a>
    <h1>bienvenido al Curso {{$curso->name}}</h1>
    <p><strong>Categoria: {{$curso->categoria}}</strong></p>
    <p>{{$curso->descripcion}}</p>

    <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection