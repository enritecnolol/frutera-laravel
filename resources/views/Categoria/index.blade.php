@extends('layouts.app')

@section('title', 'Categoria')

@section('content')

    <div class="text-center">
        <h3>Categorias</h3>
        <a style="margin-top: 10px;" class="btn btn-info" href="/categorias/create" role="button"><i class="fas fa-plus-square"></i> Agregar categoria</a>
         <div style="margin-top: 50px;">
             <table class="table">
                 <thead class="thead-dark">
                 <tr>
                     <th scope="col">Categoria</th>
                     <th scope="col">Descripcion</th>
                     <th scope="col">Slug</th>
                     <th scope="col">Editar</th>
                     <th scope="col">Eliminar</th>
                 </tr>
                 </thead>
                 <tbody>
                 @foreach($categoria as $categ)
                 <tr>
                     <td>{{$categ->categoria}}</td>
                     <td>{{$categ->descripcion}}</td>
                     <td>{{$categ->slug}}</td>
                     <td><a href="/categorias/{{$categ->slug}}/edit">editar</a></td>
                     <td> {!! Form::open(['route' => ['categorias.destroy',$categ->slug ], 'method' => 'DELETE']) !!}
                         {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                         {!! Form::close() !!}</td>
                 </tr>
                 @endforeach
                 </tbody>
             </table>
         </div>
    </div>


@endsection
