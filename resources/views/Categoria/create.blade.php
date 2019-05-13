@extends('layouts.app')

@section('title', 'Agregar Categoria')

@section('content')
    <div class="text-center">
    <h1>Agregar Categoria</h1>
    </div>
    <div style="margin-top: 20px;height: 500px;" class="col-sm">
        <form action="/categorias" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id=""  name="categoria" placeholder="">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="" rows="3" name="descripcion"></textarea>
            </div>
            <button type="button"  onClick="javascript:history.back();" class="btn btn-secondary" data-dismiss="modal">atras</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
