<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Detail;

class OrderController extends Controller
{
    public function order(){
        $order = Order::all();

        return view('backend.order.list', compact('order'));
    }
    public function order_detail($id){
        $order_detail = Order_Detail::where('id_order', $id)->get();
        $order_id = Order::find($id);
        // $order_detail = Order_Detail::all();

        return view('backend.order.order_detail', compact('order_detail', 'order_id'));
    }
}
