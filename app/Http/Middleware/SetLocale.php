<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;
use App\Helpers\SessionHelpers;
use Symfony\Component\HttpFoundation\Session\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle(Request $request, Closure $next): Response
    {
        $session = SessionHelpers::get('lang');
        if($session == 'en'){
            App::setLocale('en');
        }else{
            App::setLocale('id');
        }
        return $next($request);
    }

}
