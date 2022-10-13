@extends('layouts.principal')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-auto me-auto">
                <h3>Venta</h3>
            </div>
        </div>
        <form method="POST" action="{{route('sales.create')}}">
         @csrf
            <div class="mb-3">
                <label for="product_id" class="form-label">Id producto</label>
                <input type="text" class="form-control" id="product_id" name="product_id" aria-describedby="product_id">

            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="quantity" name="quantity">
            </div>

            <button type="submit" class="btn btn-primary">Realizar venta</button>
        </form>
         @if ($message = Session::get("error"))
            <div class="alert alert-danger alert-block mt-4">
                <strong>{{ $message }}</strong>
            </div>
        @endif

    </div>
@endsection

