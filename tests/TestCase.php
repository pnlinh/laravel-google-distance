<?php

namespace Pnlinh\GoogleDistance\Tests;

use Pnlinh\GoogleDistance\Providers\GoogleDistanceServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function getPackageProviders($app)
    {
        return [
            GoogleDistanceServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('google-distance.api_key', 'foo');
    }
}
