<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//add auth

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
      //add
      if(Auth::check())
      {
          if(Auth::user()->usertype == '1')
          {
              return $next($request);
          }
          else
          {
              return redirect('/home')->with('status','Access Denied! as you are not as admin');
          }
      }
      else
      {
          return redirect('/home')->with('status','Please Login First');
      }
    }
}