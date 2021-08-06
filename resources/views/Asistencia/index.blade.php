@extends('adminlte::page')

@section('title', 'Asistencia')

@section('content_header')
    <h1>Dashboard ventas</h1>
@stop
    
@section('content')
    {{-- <h1>bienvenido a la pagina principal</h1>
    <a href="{{route('asistencia.create')}}">crear cursos</a>
    <ul>
        @foreach ($asistencia as $asistencia)
            <li>
                <a href="">{{$asistencia->trabajador_id}}</a>
            </li>
            <li>
                <a href="">{{$asistencia->estado}}</a>
            </li>
        @endforeach
    </ul> --}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <div class="flex flex-col mt-8">
        <div >
            <div
                >
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Trabajador</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Estado</th>
                            <th
                                class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                Fecha</th>
                        </tr>
                    </thead>

                    @foreach ($asistencia as $asistencia)
                        
                    
                    <tbody class="bg-white" >
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{$asistencia->trabajador_id}}</div>

                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{$asistencia->estado}}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{$asistencia->fecha}}</div>
                            </td>

                            <td
                                class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                        
                    </tbody>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

   {{-- {{ $asistencia->links() }} --}}
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop


{{-- {{route('asistencia.show', $asistencia)}} --}}