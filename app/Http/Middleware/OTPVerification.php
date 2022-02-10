<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OTPVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $valid=0;
        if(auth()->user()->otp_verified == "1"){$valid=1;}
     

        if ($valid==0) {
            return redirect(route('otpPage'));
        }
        return $next($request);
    }
}
 