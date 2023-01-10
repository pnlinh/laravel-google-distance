<?php

namespace Pnlinh\GoogleDistance\Contracts;

use GuzzleHttp\Exception\GuzzleException;

interface GoogleDistanceContract
{
    /**
     * Calculate distance from origins to destinations.
     *
     * @param string      $origins
     * @param string      $destinations
     * @param string|null $overrideUnits
     *
     * @throws GuzzleException
     *
     * @return int
     */
    public function calculate(string $origins, string $destinations, ?string $overrideUnits = null): int;
}
