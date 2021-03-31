<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        $username = $request->input("username");
        $password = $request->input("pwd");
        if($username == "admin" && $password == "123"){
            return redirect("/admin/true");
        }
        return redirect("/login");
    }
}
