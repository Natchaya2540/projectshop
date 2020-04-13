<?php

namespace App\Http\Controllers;

use App\Send;
use Illuminate\Http\Request;

class SendController extends Controller

{
    public function index()
    {
        $send = Send::paginate(10);
        return view('send_order.index')
            ->with('send_orders',$send);


    }
    public function store(Request $request)
    {

//        $rules =[
//            'name' => 'required',
//            'cost' => 'required|numeric|min:0',
//            'quantity' => 'required|numeric|min:0',
//            'image' =>'required|file|max:10000|mimes:jpg,jpeg,png',
//        ];
//        $request->validate($rules);
        $send = new Send();
        $send->send_day =$request->send_day;
        $send->send_time =$request->send_time;
        $send->send_day =$request->send_day;
        $send->total =$request->total;
        $send->employee_EmpId =$request->employee_EmpId;
        $send->status_has_send_orders_id =$request->status_has_send_orders_id;
        $send->id_orders =$request->id_orders;
        $send->details =$request->details;
        $send->save ();

        return redirect()->route('send_orders.index')->with('status','อัพเดทข้อมูลสำเร็จ');
    }
}
