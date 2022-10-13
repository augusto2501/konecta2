@extends('layouts.principal')
@section('content')
    <div class="container">
        <h1>Reporte</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Producto(s) con mayor Stock</h5>
                    <p class="card-text">El producto o productos con mayor stock son:
                        <ul>
                        @foreach ($prods as $prod)
                            <li>{{$prod->name}}</li>
                        @endforeach
                        </ul>
                        Con un stock de: <span class="badge bg-info text-dark">{{$prods[0]->stock}}</span>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Producto mas vendido</h5>
                    <p class="card-text">El productos mas vendido es <span class="badge bg-warning text-dark">{{$sum[0]->name}}</span> con <span class="badge bg-warning text-dark">{{$sum[0]->total}}</span> unidades</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
