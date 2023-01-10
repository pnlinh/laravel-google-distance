<?php

namespace Pnlinh\GoogleDistance\Contracts;

use GuzzleHttp\Exception\GuzzleException;

interface GoogleDistanceContract
{
    /**
     * Calculate distance from origins to destinations.
     *
     * @param string $origins
     * @param string $destinations
     * @param string|null $overrideUnits
     *
     * @return int
     * @throws GuzzleException
     */
    public function calculate(string $origins, string $destinations, ?string $overrideUnits = null): int;
}
