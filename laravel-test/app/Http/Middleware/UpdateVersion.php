<?php

namespace App\Http\Middleware;

use App\Models\Tournaments;
use Closure;
use Illuminate\Http\Request;

class UpdateVersion
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
        $tournaments = Tournaments::find($request->id);
        if ($request->version != $tournaments->version) {
            return redirect()->route('admin')->with(['message' => "Update new version !"]);
        }

        return $next($request);
    }
}
