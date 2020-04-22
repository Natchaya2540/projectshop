<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use mysql_xdevapi\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  function construct(){
        $this->middleware('admin',['create' , 'store','edit','delete']);
    }

    public function index()
    {
      $products = Product::all();
      return view('product.index')
       ->with('products',$products);


       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $productTypes = ProductType::all()->pluck('name','id');
       return view('product.create')->with('productTypes',$productTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $rules =[
               'name' => 'required',
                'cost' => 'required|numeric|min:0',
                'quantity' => 'required|numeric|min:0',
                 'image' =>'required|file|max:10000|mimes:jpg,jpeg,png',
           ];
           $request->validate($rules);
        $product = new Product();
        $product->name =$request->name;
        $product->cost =$request->cost;
//        $product->price =$request->price;
        $product->quantity =$request->quantity;
        $product->product_type_id =$request->product_type_id;
        $product->save ();
        if ($request->hasFile('image')) {
            $filename = 'product-' .$product->id.'.'. $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path(). '/images/products/', $filename);
            $product->image = $filename;
        } else{
            $product->image ='No-image.jpg';
        }
        $product->save ();
        return redirect()->route('products.index')->with('status','บันทึกข้อมูลสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);
      $productTypes = ProductType::all()->pluck('name','id');
      return view('product.edit')
          ->with('product',$product)
        ->with('productTypes',$productTypes);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $rules =[
            'name' => 'required',
            'cost' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
//            'image' =>'required|file|max:10000|mimes:jpg,jpeg,png',
        ];
        $request->validate($rules);

        $product = Product::find($id);
        $product->update($request->all());

        if ($request->hasFile('image')) { //check ip upload new photo
            $filename =  'product-'.$product->id.'.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/images/products/', $filename);
            $product->image = $filename;

        }
        $product->save();
        return redirect()->route('products.index')->with('status','แก้ไขข้อมูลสำเร็จ');

//        if($request->id and $request->number)
//        {
//            $cart = session()->get('cart');
//
//            $cart[$request->id]["number"] = $request->number;
//
//            session()->put('cart', $cart);
//
//            session()->flash('success', 'Cart updated successfully');
//        }
   }
    public function cart()
    {
        return view('cart');
    }



    public function addToCart($id)
    {
        $product = Product::find($id);

        if(!$product) {

            abort(404);

        }
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "name" => $product->name,
                    "number" => 1,
                    "cost" => $product->cost,
                    "image" => $product->image
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['number']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "number" => 1,
            "cost" => $product->cost,
            "image" => $product->image
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }




        public function remove(Request $request)
        {
            if ($request->id) {

                $cart = session()->get('cart');

                if (isset($cart[$request->id])) {

                    unset($cart[$request->id]);

                    session()->put('cart', $cart);
                }

                session()->flash('success', 'Product removed successfully');
            }
        }
    public function delect(Request $request)
    {
//        $cart = session()->get('cart');
//        if (isset($cart[$request->all])) {
//            unset($cart[$request->all()]);
//            session()->flash('cart', $cart);
        $request->session()->forget('cart');
        return redirect()->back()->with('cart_index')->with('status', 'สำเร็จ');

        }
//        session()->flash('success', 'Product removed successfully');
//        $request->session('cart')->flash();
////            $cart = session()->get('cart');
//            session()->flash('cart');

////        return redirect()->route('cart.index')->with('status','แก้ไขข้อมูลสำเร็จ');


//        $this->push('cart', $cart);
//
//        $this->removeFromOldFlashData([$cart]);


//    public function incrementCart(Request $request, $id){
//        $product=Product::find($id);
//        $prevCart=$request->session()->get('cart');
//        $cart=new Cart($prevCart);
//        $cart->addToCart($id,$product);
//        $request->session()->put('cart',$cart);
//        return redirect('/products/cart');
//    }



    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
