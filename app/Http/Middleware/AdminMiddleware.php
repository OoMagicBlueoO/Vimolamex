<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
class AdminMiddleware
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
      if ($user = Sentinel::check())
      {
        if(Sentinel::inRole('admin')){
          return $next($request,[
            'user'=>$user,
          ]);
        }else{
          Sentinel::logout(null, true);
          return redirect('/');
        }
      }
      else
      {
        return redirect('/');
      }

    }
}
