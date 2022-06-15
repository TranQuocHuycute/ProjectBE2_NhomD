<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class per_page
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { $per_page = $request->input('per_page');
        if(empty($per_page)){
            $request->merge(['per_page' => '10']);
           

        }
        if (is_string($per_page)){
            $request->merge(['per_page' => '20']);
          

        }
        if (is_numeric($per_page)){
            $request->merge(['per_page' => '30']);
        }
        return $next($request);
    }
}
