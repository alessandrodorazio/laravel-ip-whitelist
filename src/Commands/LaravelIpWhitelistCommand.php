<?php

namespace Alessandrodorazio\LaravelIpWhitelist\Commands;

use Illuminate\Console\Command;

class LaravelIpWhitelistCommand extends Command
{
    public $signature = 'laravel-ip-whitelist';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
