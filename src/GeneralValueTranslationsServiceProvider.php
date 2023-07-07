<?php

namespace Sedlatschek\GeneralValueTranslations;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GeneralValueTranslationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-general-value-translations');
    }

    public function registeringPackage()
    {
        $this->app->register(ValidationServiceProvider::class);
    }
}
