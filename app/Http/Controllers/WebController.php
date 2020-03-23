<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public  function shopinfo(){
        $username ="natchaya ";
        $address="ขอนแก่น";
        $tel="099-8300401";

        return view ( "shopinfo",[
            'username' => $username,
            'address' => $address,
            'tel' => $tel

            ]);
    }
}
