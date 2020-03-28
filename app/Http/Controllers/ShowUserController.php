<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShowUserController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $users= DB::table('users')
            ->where('users.id',$id)
            ->get();
        return view('profile')
            ->with('users',$users);

    }

}
