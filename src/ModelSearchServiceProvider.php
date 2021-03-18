<?php

namespace Tooshay\ModelSearch;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Tooshay\ModelSearch\Commands\ModelSearchCommand;

class ModelSearchServiceProvider extends PackageServiceProvider
{
    public function boot(): ModelSearchServiceProvider
    {
        Builder::macro('whereLike', function ($attributes, string $searchTerm) {
            foreach (explode(' ', $searchTerm) as $searchTerm) {
                $this->where(function (Builder $query) use ($attributes, $searchTerm) {
                    foreach (Arr::wrap($attributes) as $attribute) {
                        $query->when(
                            str_contains($attribute, '.'),
                            function (Builder $query) use ($attribute, $searchTerm) {
                                [$relationName, $relationAttribute] = explode('.', $attribute);

                                $query->orWhereHas($relationName, function (Builder $query) use ($relationAttribute, $searchTerm) {
                                    $query->where($relationAttribute, 'LIKE', "%{$searchTerm}%");
                                });
                            },
                            function (Builder $query) use ($attribute, $searchTerm) {
                                $query->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
                            }
                        );
                    }
                });
            }

            return $this;
        });

        return $this;
    }

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
