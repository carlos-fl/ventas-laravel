<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductosController extends Controller {
    public function saveProduct(Request $request) {
        $newProduct = new Producto();
        $newProduct->codigoProducto = $request->codigo;
        $newProduct->nombre = $request->nombre;
        $newProduct->precio = $request->precio;
        $newProduct->stock = $request->stock;
        $newProduct->save();

        return redirect(route('home'));
    }

    public function showForm() {
        return view('saveProducts');
    }

    public function showProducts() {
        $products  = Producto::all();

        return view('productos', compact('products'));
    }
}
