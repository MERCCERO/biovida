<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Gloudemans\Shoppingcart\Facades\Cart;


class PayPalController extends Controller
{
    public function checkout()
{
    $provider = new ExpressCheckout;

    $items = [];
    foreach (Cart::content() as $item) {
        $items[] = [
            'name' => $item->name,
            'price' => $item->price,
            'qty' => $item->qty,
        ];
    }

    $data['items'] = $items;
    $data['invoice_id'] = uniqid();
    $data['invoice_description'] = "Factura #{$data['invoice_id']}";
    $data['return_url'] = route('paypal.success');
    $data['cancel_url'] = route('paypal.cancel');
    $data['total'] = floatval(Cart::total());

    try {
        $response = $provider->setExpressCheckout($data);

        if (isset($response['paypal_link'])) {
            return redirect()->away($response['paypal_link']);
        } else {
            return redirect()->route('cart')->with('error', 'No se pudo generar el enlace de PayPal.');
        }

    } catch (\Exception $e) {
        return redirect()->route('cart')->with('error', 'Error en el checkout de PayPal: ' . $e->getMessage());
    }
}

    public function success(Request $request)
    {
        $provider = new ExpressCheckout;

        $token = $request->get('token');
        $payerId = $request->get('PayerID');

        $response = $provider->getExpressCheckoutDetails($token);

        $data = [];
        $data['items'] = [
            [
                'name' => 'Producto 1',
                'price' => 10.00,
                'desc'  => 'Descripción del producto 1',
                'qty' => 1
            ],
        ];
        $data['invoice_id'] = $response['INVNUM'] ?? uniqid();
        $data['invoice_description'] = "Factura #{$data['invoice_id']}";
        $data['total'] = 10.00;

        $payment_status = $provider->doExpressCheckoutPayment($data, $token, $payerId);

        return view('paypal.success', compact('payment_status'));
    }

    public function cancel()
    {
        return view('paypal.cancel');
    }
}
