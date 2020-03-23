<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class tableController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $orders= DB::table('orders')
        ->where('orders.user_ID',$id)
        ->get();
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
