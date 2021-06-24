<?php

namespace Emilianotisato\LivewireForms;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Emilianotisato\LivewireForms\Commands\LivewireFormsCommand;

class LivewireFormsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-livewire-forms')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-livewire-forms_table')
            ->hasCommand(LivewireFormsCommand::class);
    }
}
