@extends('layouts.principal')
@section('content')
     <div class="container mt-4">
        <h1>Producto {{$product->name}}</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha creación</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->reference}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->stock}}</td>
                    <td>{{$product->created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
