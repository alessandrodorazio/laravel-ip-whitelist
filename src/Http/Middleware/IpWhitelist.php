<?php

namespace Alessandrodorazio\LaravelIpWhitelist\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;

class IpWhitelist
{
    public function handle(Request $request, Closure $next)
    {
        $ipAddresses = config('ip-whitelist.whitelist');
        if (! in_array($request->ip(), $ipAddresses) && ! config('app.debug')) {
            Log::error('IP address not in whitelist ' . $request->ip());

            return Redirect::to('/');
        }

        return $next($request);
    }
}
