<?php

namespace Tooshay\ModelSearch;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tooshay\ModelSearch\Commands\ModelSearchCommand;

class ModelSearchServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-search')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_model_search_table')
            ->hasCommand(ModelSearchCommand::class);
    }
}
