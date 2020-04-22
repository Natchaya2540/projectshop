<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiverController extends Controller
{
    public function index()
    {
        $id=Auth::user()->id;
        $orders= DB::table('orders')
            ->where('orders.employee_EmpId',$id)
            ->get();
        return view('diver.index')
            ->with('orders', $orders);


    }
    public function edit($id_orders)
    {
        $orders = Order::find($id_orders);
        return view('diver.edit')
            ->with('orders', $orders);
    }
    public function update(Request $request, $id_orders )
    {
        $orders = Order::find($id_orders);
        $orders->update($request->all());

        $orders->save();
        return redirect()->route('diver.index')->with('status', 'แก้ไขข้อมูลสำเร็จ');
    }
}
