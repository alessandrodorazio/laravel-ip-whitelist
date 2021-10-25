<?php

namespace Alessandrodorazio\LaravelIpWhitelist;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alessandrodorazio\LaravelIpWhitelist\LaravelIpWhitelist
 */
class LaravelIpWhitelistFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-ip-whitelist';
    }
}
