<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderProduct;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class OrderProductController extends Controller{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('Order.index')
            ->with('orders',$orders);
    }

    public function export_pdf(){
        $orders =Order::orderBy('id')->get();
        $data = [
            'order'=> $orders
        ];
        $pdf = PDF::loadView('view_name', $data);
        return $pdf->stream('example.pdf');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request) {



    }

    public function store(Request $request)
    {
//
    }




    public function edit($id){}

    public function update(Request $request, $id){


    }



    public function remove(Request $request)
    {

    }


    public function cart()
    {

    }


    public function destroy($id_orders)
    {
        Order::destroy($id_orders);
        return back();
    }



}



