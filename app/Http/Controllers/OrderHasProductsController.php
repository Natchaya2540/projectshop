<?php

namespace App\Http\Controllers;

use App\OrderProduct;
use Illuminate\Http\Request;

class OrderHasProductsController extends Controller
{

    public function index()
    {
        $order_has_products = OrderProduct::paginate(10);
        return view('Order_Product.index')
            ->with('order_has_products', $order_has_products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {


    }

    public function store(Request $request)
    {
//
    }


    public function show()
    {


    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {


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





