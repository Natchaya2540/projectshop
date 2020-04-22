<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function index()
    {
        $orders = Order::paginate(10);
        return view('work.index')
            ->with('orders', $orders);
    }
//    public function index() {
//        $users = DB::select('select * from student');
//        return view('stud_edit_view',['users'=>$users]);
//    }
//    public function show($id) {
//        $users = DB::select('select * from student where id = ?',[$id]);
//        return view('stud_update',['users'=>$users]);
//    }
    public function edit($id_orders)
    {
        $order = Order::find($id_orders);
        return view('work.edit')
            ->with('order', $order);
    }
        public function update(Request $request, $id_orders )
        {
            $order = Order::find($id_orders);
            $order->update($request->all());

            $order->save();
            return redirect()->route('work.index')->with('status','แก้ไขข้อมูลสำเร็จ');
//        $addorders =  Order::find($id_orders);
//        $addorders -> send_has_orders_status_ID = "55";
//        dd($addorders);
//        echo "Record updated successfully.<br/>";
//        echo '<a href = "/edit-records">Click Here</a> to go back.';
    }

//    public static function update_by_id($id_orders,$){
//
//    }
public function destroy($id)
{
    Order::destroy($id);
    return back();
}
}
