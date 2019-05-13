@extends('layouts.app')

@section('title', 'Productos')

@section('content')

    <div class="text-center" style="margin-top: 20px;">
        <h1>Frutas</h1>
    </div>

    <a style="margin: 10px;" class="btn btn-info" href="/frutas/create" role="button"><i class="fas fa-plus-square"></i> Agregar Fruta</a>
    <div class="row">
        @foreach ($frutas as $fruta)
            <div class="col-sm">
                <div class="card text-center" style="width: auto;height: auto">
                    <img class="card-img-top rounded-circle mx-auto d-block" style="height: 130px;width: 180px;margin: 20px; background-color: #fefefe" src="imagenes/{{$fruta->fruta}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$fruta->name}}</h5>
                        <p class="">{{$fruta->description}}</p>
                        <p>RD$: {{$fruta->precio}}</p>
                        <a href="/frutas/{{$fruta->slug}}" class="btn btn-primary">Ver mas...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




@endsection
