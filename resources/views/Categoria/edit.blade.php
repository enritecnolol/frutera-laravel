@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
    <div class="text-center">
        <h1>Editar Categoria</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">
        <form action="/categorias/{{$categoria->slug}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id=""  name="categoria" value="{{$categoria->categoria}}" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="{{$categoria->descripcion}}">
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
@endsection
