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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->reference}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
