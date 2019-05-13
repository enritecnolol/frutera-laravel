@extends('layouts.app')

@section('title', 'Fruta')

@section('content')

    <div style="margin: 5%">
        <img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px;width: 200px;margin: 20px; background-color: #fefefe" src="/imagenes/{{$fruta->fruta}}" alt="Card image cap">
        <div class="text-left">
            <h1 class="card-title">{{$fruta->name}}</h1>
            <h3>{{$fruta->description}}</h3>
            <h6>RD$: {{$fruta->precio}}</h6>
            @foreach($categoria as $categ)
                <div class="vertical" style="">
                {{$categ->categoria}}
                {!! Form::checkbox('categorias[]', '{{$categ->id}}');!!}
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <div class="form-group">
                <a href="/frutas/{{$fruta->slug}}/edit" class="btn btn-warning" style="margin: 10px">Editar</a>
                {!! Form::open(['route' => ['frutas.destroy',$fruta->slug ], 'method' => 'DELETE']) !!}
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
