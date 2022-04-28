<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class checkadmin
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
        $dataJoin = DB::table('won_prizes')
                ->rightJoin('buy_outs', 'won_prizes.time_number', '=', 'buy_outs.numberCount')
                ->where('buy_outs.userId', Auth::user()->id) 
                ->get();
        Session::put('dataJoin', $dataJoin);

       if (Auth::user()) {
            if(Auth::user()->is_idadmin >= '1') {
              
                return $next($request);
            }else{
               
                return redirect('/');
            }
       }else{
            return redirect('/');
       }
         
    }
}
