<?php

namespace App\Http\Middleware;

use Closure;

class IsEmp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->isEmp()) {
            return $next($request);
        }
        session(['error'=>['code'=>'Access denied','msg'=>'ผู้ใช้งานส่วนนี้ต้องเป็น ลูกค้า เท่านั้น']]);
        return redirect()->route('error');
    }
}
