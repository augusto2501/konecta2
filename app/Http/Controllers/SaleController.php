<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;

class SaleController extends Controller
{
    //
    public function index()
    {
        return view('sales.index');
    }

    public function create(Request $request)
    {

        $product = Product::findOrFail($request->product_id);

        if (($product->stock) - ($request->quantity) >= 0) {

            $product->update([
                'stock' => ($product->stock) - ($request->quantity)
            ]);
            Sale::create([
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
                'total' => ($product->price) * ($request->quantity)
            ]);
            return redirect()->route('products.index');
        } else {
            return back()->with('error', 'No se puede realizar la venta, el Stock es insuficiente');
        }
    }
}
