@extends('layouts.app')

@section('title', 'Creando Frutas')

@section('content')
    <div class="text-center">
        <h1>Agrega una fruta</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">

        <form action="/frutas" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" class="form-control" id="precio"  name="precio" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Categorias</label>

                    @foreach($categoria as $categ)


                    <input type="checkbox" name="categorias[]" value="{{$categ->id}}"> {{$categ->categoria}}
                    @endforeach

            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="img"/>
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>

    </div>
@endsection
