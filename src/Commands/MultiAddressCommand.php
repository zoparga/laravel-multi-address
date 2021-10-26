<?php

namespace zoparga\MultiAddress\Commands;

use Illuminate\Console\Command;

class MultiAddressCommand extends Command
{
    public $signature = 'laravel-multi-address';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
