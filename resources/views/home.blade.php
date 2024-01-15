@extends('layouts/layout')

@section('title')
    Home
@endsection

@section('cab')
    <h2>Bienvenidos a HOME</h2>
@endsection

@section('menu')
    <a href="home" class="active">Home</a>
    <a href="contact">Contactos</a>
    <a href="offers">Offers</a>
@endsection

@section('content')
    <a href="create" class="btn btn-primary">Crear</a>

    <table>
        <thred>        
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Categoria</th>
                <th scope="col">Precio</th>
                <th scope="col">Accion</th>
            </tr>        
        </thred>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td><a class="btn btn-info" href="details/{{$producto->id}}" >Detalles</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br></br>
    <p>TODO categorias</p>               
    <form action="home" method="get">
        <label><input type="checkbox" name="cat_list[]" value="smarthphone">Filtrar por Smartphone</label><br>
        <label><input type="checkbox" name="cat_list[]" value="monitor">Filtrar por Monitores</label><br>
        <label><input type="checkbox" name="cat_list[]" value="graficas">Filtrar por Gráficas</label><br>
        <label><input type="checkbox" name="cat_list[]" value="ratones">Filtrar por Ratones</label><br>
        <button type="submit" class="btn btn-primary" name="enviar">Filtrar</button>
    </form>
    
    
    
    <a href="order" class="btn btn-info">Ordenar por precio</a>

@endsection