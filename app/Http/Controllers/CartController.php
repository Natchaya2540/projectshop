<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\OrderProduct;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Cart::all();

        return view('cart')
            ->with('cart',$products);
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
        $rules = [
            'order_date' => 'required',
            'order_time' => 'required',
            'employee_EmpId' => 'required',

        ];
        $request->validate($rules);
        $order = new Order();

        $order->order_date = $request->order_date;
        $order->order_time = $request->order_time;
        $order->employee_EmpId = $request->employee_EmpId;
        $order->user_ID = Auth::user()->getAuthIdentifier();

        $order->save();


        foreach ($request->products as $id => $order_has_products) {

            $order_products = new OrderProduct();
            $order_products->id_orders = $order->id_orders;
            $order_products->products_id = $id;
            $order_products->price = $order_has_products['cost'];
            $order_products->quantity = $order_has_products['number'];
            $order_products->total = $order_has_products['cost'] * $order_has_products['number'];
            $order_products->name = $order_has_products['name'];
//            $order_has_products->Total_price =$order_has_products['Total_price'];

            $order_products->save();

        }

//  echo "$order_products";
//
            return redirect()->route('cart_index')->with('status', 'บันทึกข้อมูลสำเร็จ');
        }









       public function show($id)
       {

//           $cart = OrderProduct::orderBy('id')->get();
//           $orders = Order::

       }

//








    public function edit($id){}

    public function update(Request $request){

        if($request->id and $request->number)
      {
            $products = session()->get('cart');

          $products[$request->id]["number"] = $request-> number;

           session()->put('cart',   $products);

           session()->flash('success', 'Cart updated successfully');
      }

}



    public function remove(Request $request)
    {
        if ($request->id) {
            $products = session()->get('cart');
            if (isset(  $products[$request-> id])) {

                unset(  $products[$request->id]);
                session()->put('cart',  $products);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
//    public function delect(Request $request)
//    {
//        if ($request) {
//            $products = session()->get('cart');
//
//                unset(  $products[$request]);
//                session()->put('cart',  $products);
//            }
//            session()->flash('success', 'Product removed successfully');
//
//        }



    public function cart()
    {
        return view('cart');
    }
    public function incrementCart(Request $request, $id){
        $product=Product::find($id);
        $prevCart=$request->session()->get('cart');
        $cart=new Cart($prevCart);
        $cart->addItem($id,$product);
        $request->session()->put('cart',$cart);
        return redirect('/products/cart');
    }

    public function destroy()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Your rental request has been sent');
    }
}
