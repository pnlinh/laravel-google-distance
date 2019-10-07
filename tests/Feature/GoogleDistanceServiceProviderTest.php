<?php

namespace Pnlinh\GoogleDistance\Tests\Feature;

use Illuminate\Support\ServiceProvider;
use Pnlinh\GoogleDistance\Providers\GoogleDistanceServiceProvider;
use Pnlinh\GoogleDistance\Tests\TestCase;

class GoogleDistanceServiceProviderTest extends TestCase
{
    /** @test */
    public function it_can_be_constructed()
    {
        $this->assertInstanceOf(ServiceProvider::class, new GoogleDistanceServiceProvider($this->app));
    }
}
