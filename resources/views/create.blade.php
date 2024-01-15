@extends('layouts/layout')

@section('title')
    Crear
@endsection

@section('cab')
    <h2>Crear</h2>
@endsection

@section('menu')
    <a href="home">Home</a>
    <a href="contact">Contactos</a>
    <a href="offers">Offers</a>
@endsection

@section('content')
    <h2>Crear Registro</h2>
    <form action="productos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">ID</label>
            <input id="id" name="id" type="text" class="form-control" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Categoria</label>
            <input id="categoria" name="categoria" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control"  tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="5">
        </div>
        <button href="/home" class="btn btn-secondary" tabindex="6">Cancelar</button>
        <button type="submit" class="btn btn-primary" tabindex="7">Crear registro</button>
    </form>
@endsection