@extends('layouts.principal')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-auto me-auto">
                <h3>Productos</h3>
            </div>
            <div class="col-auto">
                <a class="btn btn-dark" href="{{route('sales.index')}}">Venta de producto</a>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{route('products.create')}}">Crear producto</a>
            </div>
        </div>
        @empty ($products)
            <div class="alert alert-danger">
                No hay productos
            </div>
        @else
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Referencia</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Mostrar</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->reference}}</td>
                        <td><span class="badge bg-danger">{{$product->stock}}</span></td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->category}}</td>
                        <td><a class="btn btn-primary" href="{{route('products.show',['id'=>$product->id])}}">Mostrar</a></td>
                        <td><a class="btn btn-warning" href="{{route('products.edit',['id'=>$product->id])}}">Editar</a></td>
                        <td>
                            <form method="POST" action="{{route('products.destroy',['id'=>$product->id])}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endempty
    </div>
@endsection

