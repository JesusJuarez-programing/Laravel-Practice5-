<?php

namespace App\Http\Middleware;

use Closure;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $name)
    {
        // $ip = $request->ip();
        // if ($ip == '127.0.0.1')
        // {
        //     return redirect('/');
        // }
        $user = user::find(1);
        if ($name == $user->name)
        {
           throw new \Exception("Error", 1);
        }
            return $next($request);
    }
}
