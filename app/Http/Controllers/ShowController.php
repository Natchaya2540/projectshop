<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderProduct;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function index()
    {
        $show = OrderProduct::all();
        return view('showdetails')
            ->with('showdetails', $show);


    }

    public function show($id)
    {

//        $order_has_product= OrderProduct::where('id')->get();
//        $orders =Order::where('id_orders')->get();
//        $users=User::where('id')->get();
//        return view('showdetails',compact('order_has_product','orders','users'));

           $order_has_products= DB::table('orders')
               ->select('orders.*','order_has_products.*','users.name as uname','users.tel','users.send_address','users.Tex')
            ->join('order_has_products','orders.id_orders','=','order_has_products.id_orders')
           ->join('users','users.id','=','orders.user_ID')

            ->where('orders.id_orders',$id)
            ->get();
           return view('showdetails',["order_has_products"=> $order_has_products]);


    }

//    public function showuser($id)
//    {
////        $p= DB::table('users')
//            ->join('orders','users.id','=','orders.user_ID')
//            ->where('users.id',$id)
//            ->get();
//            return view('showdetails',["orders"=> $p]);


//    public function table($id){
//        $order_has_products= DB::table('orders')
//            ->join('order_has_products','orders.id_orders','=','order_has_products.id_orders')
//            ->where('orders.id_orders',$id)
//            ->get();
//        return view('showdetails',["order_has_products"=> $order_has_products]);
//
//
//    }


}
