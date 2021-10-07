<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class Currency
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
        if (! $request->get('currency') && ! $request->getSession()->get('currency')) {
          $clientIP = $request->getClientIp();
          $localCurrency = geoip($clientIP)->getAttribute('currency');
          $request->getSession()->put([
            'currency' => $localCurrency,
          ]);
        }
        
        if (Session()->has('appcur') AND array_key_exists(Session()->get('appcur'), config('currency'))) {
            $cur = Session()->get('appcur');
            session(['currency' => $cur]);
            // App::setLocale(Session()->get('appcur'));
        }
        else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            $cur = Session()->get('app.fallback_cur');
            session(['currency' => $cur]);
        }
        return $next($request);
    }
}
