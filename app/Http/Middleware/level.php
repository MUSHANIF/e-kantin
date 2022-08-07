<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Redirect;
use Auth;
use Illuminate\Database\Eloquent\Model;
class level
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$levels)
    {
        if(!auth()->check() || auth()->user()->level !==  4){
             abort(403);
        }
        return $next($request);
    }
        // if(in_array($request->user()->Level,$levels)){
        //     return $next($request);
        // }
        // if(Auth::user()->Level == 5){
        //     return Redirect::to('/');
        // }elseif(Auth::user()->Level == 4){
        //     return Redirect::to('/');
        // }else{
        //     return redirect('/login')->with('error',"You don't have admin access.");
        // }
       
        // $roles = array_slice(func_get_args(), 2);

        // foreach ($roles as $role) { 
        //     $user = \Auth::user()->level;
        //     if( $user == $role){
        //         return $next($request);
        //     }
        // }
        // if(auth()->user()->Level == 5){
        //     return $next($request);
        // }elseif(auth()->user()->Level == 4){
        //     return $next($request);
        // }
        // return redirect('/')->with('error',"You don't have admin access.");
        // 
}
