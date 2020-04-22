<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class EmpController extends Controller
{
    public function index()
    {
        $employ = User::paginate(10);
        return view('employee.index')
            ->with('users',$employ);


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
        $employ = new User();
        $employ->name =$request->name;
        $employ->email =$request->name;
        $employ->password =$request->password;
//        $employ->firstname =$request->firstname;
//        $employ->lastname =$request->lastname;
        $employ->tel =$request->tel;
        $employ->user_type =$request->user_type;
        $employ->save ();

        return redirect()->route('employee.index')->with('status','สมัครเรียบร้อย');
    }

}
