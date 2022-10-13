@extends('layouts.principal')
@section('content')
     <div class="container mt-4">
        <h1>Editar producto</h1>
        <form method="POST" action="{{route('products.update',['id'=>$product->id])}}">
        @csrf
        @method('PUT')
            <div class="form-row">
                <label for="name">Nombre producto</label>
                <input class="form-control" type="text" name="name" value="{{$product->name}}" required>
            </div>
            <div class="form-row">
                <label for="reference">Referencia</label>
                <input class="form-control" type="text" name="reference" value="{{$product->reference}}" required>
            </div>
            <div class="form-row">
                <label for="price">Precio</label>
                <input class="form-control" type="number" name="price" value="{{$product->price}}" required>
            </div>
            <div class="form-row">
                <label for="weight">Peso</label>
                <input class="form-control" type="number" name="weight" value="{{$product->weight}}" required>
            </div>
            <div class="form-row">
                <label for="category">Categoria</label>
                <input class="form-control" type="text" name="category" value="{{$product->category}}" required>
            </div>
            <div class="form-row">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" value="{{$product->stock}}" required>
            </div>
            <div class="form-row mt-3">
                <button class="btn btn-primary" type="submit">Editar producto</button>
            </div>
        </form>
    </div>
@endsection
