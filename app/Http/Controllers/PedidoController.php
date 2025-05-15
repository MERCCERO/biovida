<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use Gloudemans\Shoppingcart\Facades\Cart;

class PedidoController extends Controller
{
    //
     public function verPedidosCliente($cliente_id)
{
    $pedidos = Pedido::where('cliente_id', $cliente_id)
        ->with(['productos.producto']) // eager loading
        ->orderBy('fecha', 'desc')
        ->get();

    return view('pedidos.listaPedidos', compact('pedidos', 'cliente_id'));
}


public function hacerPedido()
{
    $carrito = Cart::content();
    $total = Cart::total();

    return view('pedidos.listaPedidos', compact('carrito', 'total'));
}
    
public function finalizarPedido()
{
    $carrito = Cart::content();

    foreach ($carrito as $item) {
        Pedido::create([
            'producto_id' => $item->id,
            'cantidad' => $item->qty,
            'precio' => $item->price,
            'estado' => 'pendiente',
        ]);
    }

    Cart::destroy();

    return redirect()->route('catalogoProductos')->with('success', '¡Pedido realizado con éxito!');
}
}
