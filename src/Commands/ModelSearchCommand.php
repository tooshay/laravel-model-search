<?php

namespace Tooshay\ModelSearch\Commands;

use Illuminate\Console\Command;

class ModelSearchCommand extends Command
{
    public $signature = 'laravel-model-search';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
