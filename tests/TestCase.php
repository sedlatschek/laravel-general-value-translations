<?php

namespace Sedlatschek\GeneralValueTranslations\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Sedlatschek\GeneralValueTranslations\GeneralValueTranslationsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            GeneralValueTranslationsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        $app->bind('path.lang', fn () => __DIR__.'/lang');

        // $app->register(\Sedlatschek\GeneralValueTranslations\ValidationServiceProvider::class);
    }
}
