<?php

namespace Pnlinh\GoogleDistance\Facades;

use Illuminate\Support\Facades\Facade;
use Pnlinh\GoogleDistance\DistanceApi;

class GoogleDistance extends Facade
{
    protected static function getFacadeAccessor()
    {
        return DistanceApi::class;
    }
}