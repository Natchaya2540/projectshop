<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductType::all();
        return view('product_type.index')
            ->with('product_types',$product_types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    public function store(Request $request) {}


    public function show($id){}


    public function edit($id){}

    public function update(Request $request, $id){}

    public function destroy($id)
    {
        ProductType::destroy($id);
        return back();
    }
}
