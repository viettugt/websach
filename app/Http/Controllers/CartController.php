<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_Detail;
use Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function order(Request $request){
        $cart = Cart::content();
        $total = Cart::subtotal();
        $total_replace = str_replace(",", "", $total);


        $customer = new Customer;
        $customer->name = $request->name;
        $customer->phone = $request->phone;
        $customer->address = $request->address;
        $customer->save();

        $order = new Order;
        $order->id_customer = $customer->id;
        $mt = explode(' ', microtime());
        $order->sku = ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
        $order->total = (int)$total_replace;
        $order->save();

        foreach ($cart as $key => $value) {
            $order_detail = new Order_Detail;
            $order_detail->id_order = $order->id;
            $order_detail->id_product = $key;
            $order_detail->quantity = $value->qty;
            $order_detail->price = $value->price;
            $order_detail->save();
        }
        Session::forget('cart');

        return back()->with('thongbao', 'Order Success');
    }
}
