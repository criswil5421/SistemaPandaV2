@extends('adminlte::page')

@section('title', 'Producto')

@section('content_header')
    <h1>ventas</h1>
@stop
    
@section('content')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="col-md-12">

       <button type="button"  class="btn btn-outline-success btn-rounded waves-effect btn-lg "><i class="fas fa-solid fa-clipboard-list pr-2"
           aria-hidden="true"></i>Agregar Nuevo Producto</button>
           
       
   </div>
   
<div >
 
   <div class="flex-1 flex flex-col overflow-hidden  ">
       
       <main >
           <div class="container mx-auto px-4 py-0">

               <div class="flex flex-col mt-8">
                   <div >
                       <div
                           >
                           <table class="min-w-full">
                               <thead>
                                   <tr>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Nombre</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           categoria</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Precio</th>
                                        <th
                                           class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                           Codigo</th>
                                        
                                       <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                                   </tr>
                               </thead>

                               @foreach ($producto as $producto)

                               <tbody class="bg-white">
                                   <tr>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$producto->Nombre}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$producto->Categoria}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$producto->Precio}}</div>
                                       </td>
                                       <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <div class="text-sm leading-5 text-gray-500">{{$producto->Codigo}}</div>
                                       </td>
                                    
                                     
                                      

                                       <td
                                           class="px-6 py-4 whitespace-no-wrap text-right border-b border-red-200 text-sm leading-5 font-medium">
                                           <a href="#" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-regular fa-eye pr-2"
                                               ></i></a>
                                           <a href="#" class="text-indigo-600 hover:text-indigo-900"><i class="fas fa-solid fa-pen pr-2"
                                               ></i></a>
                                               
                                           <a href="{{ route('producto.destroy', $producto->id)}}" class="text-indigo-600 hover:text-indigo-900">Eliminar</a>
                                          
                                       </td>
                                   </tr>
                          
                               </tbody>

                               @endforeach
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </main>
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