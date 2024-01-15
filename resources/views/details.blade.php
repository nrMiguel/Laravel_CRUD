@extends('layouts/layout')

@section('title')
    Detalles
@endsection

@section('cab')
    <h2>Detalles</h2>
@endsection

@section('menu')
    <a href="home">Home</a>
    <a href="contact">Contactos</a>
    <a href="offers">Offers</a>
@endsection

@section('content')
    <h2>Detalles</h2>
    <form action="/products/{{$producto->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input id="id" name="id" type="text" class="form-control" value="{{$producto->id}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{$producto->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input id="categoria" name="categoria" type="text" class="form-control" value="{{$producto->categoria}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" value="{{$producto->precio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$producto->descripcion}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
@endsection
