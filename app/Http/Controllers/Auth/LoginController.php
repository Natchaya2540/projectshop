<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
class LoginController extends Controller
{


    use AuthenticatesUsers;

    protected function validateLogin(Request $request)
    {
        $this->validate($request,
            [   $this->username() => 'required|exists:users,' . $this->username() . ',status,A',
                'password' => 'required',
            ], [
                $this->username() . '.exists' => 'ไม่พบชื่อผู้ใช้นี้ หรือบัญชีผู้ใช้ถูกปิดการใช้งาน'
            ]
        );
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected $redirectTo = '/dashboard';



    protected function authenticated(Request $request, $user)
    {
        if($user->isAdmin()){
            return redirect()->route('admin.dashboard') ;
        }else{
            return redirect()->route('dashboard') ;
        }


    }




}
