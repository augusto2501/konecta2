<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //-------------------------Mostrar todos los productos-------------------------
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with(['products' => $products]);
    }

    //-------------------------Mostrar formulario para crear un producto-----------
    public function create()
    {
        return view('products.create');
    }

    //-------------------------Guardar un producto---------------------------------
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'reference' => $request->reference,
            'price' => $request->price,
            'weight' => $request->weight,
            'category' => $request->category,
            'stock' => $request->stock,
        ]);
        return redirect()->route('products.index');
    }

    //-------------------------Mostrar un producto---------------------------------
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show')->with(['product' => $product]);
    }

    //-------------------------Mostrar formulario para editar un producto----------
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit')->with(['product' => $product]);
    }

    //-------------------------Actualizar un producto------------------------------
    public function update($id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => request()->name,
            'reference' => request()->reference,
            'price' => request()->price,
            'weight' => request()->weight,
            'category' => request()->category,
            'stock' => request()->stock,
        ]);
        return redirect()->route('products.index');
    }

    //-------------------------Eliminar un producto-------------------------------
    public function destroy($id)
    {
        Sale::where('product_id', $id)->delete();
        // dd(Sale::where('product_id', $id)->get());


        // dd($sales);

        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index');
    }

    //-------------------------Test------------------------------------------------
    public function report()
    {

        $max = Product::max('stock');
        $prods = Product::where('stock', '=', $max)->get();

        $sum = Sale::selectRaw('products.name,sales.product_id, sum(sales.quantity) as total')
            ->join('products', 'product_id', '=', 'products.id')
            ->groupBy('sales.product_id')
            ->orderBy('total', 'desc')
            ->get();

        // dd($sum);

        return view('products.report')->with(['max' => $max, 'prods' => $prods, 'sum' => $sum]);
    }
}
