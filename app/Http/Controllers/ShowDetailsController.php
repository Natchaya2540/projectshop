<?php

namespace App\Http\Controllers;

use App\Send;
use Illuminate\Http\Request;

class ShowDetailsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        /** @var TYPE_NAME $send_show */

        $send_orders = Send::paginate(10);
        return view('show_details.index')
            ->with('send_orders',$send_orders);

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







}
