<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Carbon\Carbon;
use Cache;

class UserActivity
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
            $expires_at = Carbon::now()->addMinutes(1);
            Cache::put('is_online'. Auth::user()->id, True, $expires_at );
        }

        return $next($request);
    }
}
