<?php

namespace App\Http\Middleware;

use Closure;
use Mobile_Detect;

class DetectMobile
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
        $detect = new Mobile_Detect();
        // スマホかタブレットからのアクセスならリダイレクト
        if($detect->isMobile() || $detect->isTablet()) {
            return redirect('/mobile');
        }
        return $next($request);
    }
}
