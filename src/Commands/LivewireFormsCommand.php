<?php

namespace Emilianotisato\LivewireForms\Commands;

use Illuminate\Console\Command;

class LivewireFormsCommand extends Command
{
    public $signature = 'laravel-livewire-forms';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
