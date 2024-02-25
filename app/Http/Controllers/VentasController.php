<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;

class VentasController extends Controller
{
    public function showVentas() {
        $ventas = Venta::all();
        return view('ventas', compact('ventas'));
    }

    public function redirectToVentasForm() {
        return view('saveSells');
    }

    public function saveVenta(Request $request) {
        $producto = Producto::where('codigoProducto', $request->codigoProducto)->get()[0];
        $subtotal = $producto->precio * $request->cantidad;
        $ISV = $subtotal * 0.15;
        $total = $ISV + $subtotal;

        $venta = new Venta();
        $venta->codigo = $request->codigo;
        $venta->fechaVenta = $request->date;
        $venta->codigoProducto = $request->codigoProducto;
        $venta->cantidad = $request->cantidad;
        $venta->subtotal = $subtotal;
        $venta->ISV = $ISV;
        $venta->total = $total;
        $venta->save();

        return redirect(route('home'));
    }
}
