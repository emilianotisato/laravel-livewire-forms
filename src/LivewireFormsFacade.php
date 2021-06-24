<?php

namespace Emilianotisato\LivewireForms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Emilianotisato\LivewireForms\LivewireForms
 */
class LivewireFormsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-livewire-forms';
    }
}
