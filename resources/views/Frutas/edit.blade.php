@extends('layouts.app')

@section('title', 'Creando Frutas')

@section('content')
    <div style="margin: 20px;height: 500px;" class="col-sm">

        <form action="/frutas/{{$fruta->slug}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control"   value="{{$fruta->name}}" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input class="form-control"  value="{{$fruta->description}}" name="description">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control"   value="{{$fruta->precio}}" name="precio" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Categorias</label>

                @foreach($categoria as $categ)
                    <div class="vertical" style="">
                    {{$categ->categoria}}
                    {!! Form::checkbox('categorias[]', '{{$categ->id}}');!!}
                <!--<input type="checkbox" name="categorias[]" value="{{$categ->id}}"> {{$categ->categoria}}-->
                    </div>
                @endforeach

            </div>
            <div >
                <img style="width: 200px" src="/imagenes/{{$fruta->fruta}}" alt="">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" value="{{$fruta->fruta}}" name="img"/>
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>

    </div>
@endsection
