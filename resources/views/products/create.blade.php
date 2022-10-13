@extends('layouts.principal')
@section('content')
     <div class="container mt-4">
        <h1>Crear producto</h1>
        <form method="POST" action="{{route('products.store')}}">
        @csrf
            <div class="form-row">
                <label for="name">Nombre producto</label>
                <input class="form-control" type="text" name="name" required>
            </div>
            <div class="form-row">
                <label for="reference">Referencia</label>
                <input class="form-control" type="text" name="reference" required>
            </div>
            <div class="form-row">
                <label for="price">Precio</label>
                <input class="form-control" type="number" name="price" required>
            </div>
            <div class="form-row">
                <label for="weight">Peso</label>
                <input class="form-control" type="number" name="weight" required>
            </div>
            <div class="form-row">
                <label for="category">Categoria</label>
                <input class="form-control" type="text" name="category" required>
            </div>
            <div class="form-row">
                <label for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" required>
            </div>
            <div class="form-row mt-3">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>
@endsection
