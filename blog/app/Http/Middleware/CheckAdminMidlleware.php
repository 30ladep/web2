<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckAdminMidlleware
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role_id ===1){
                // return view('index');
               return  response()->view('errors.403checkadmin');
            }
            return $next($request);
        }else{
            return redirect()->route('login');
        }
       
    }
}
