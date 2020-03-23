<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('tabledetails')
            ->with('orders', $orders);


    }
    public function show(){
//
//      $orders= DB::table('orders')
//          ->select()
//       ->where('orders.id_orders',$orders);
    }
}
