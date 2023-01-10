<?php

namespace Pnlinh\GoogleDistance\Facades;

use Illuminate\Support\Facades\Facade;

class GoogleDistance extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'google-distance';
    }
}
