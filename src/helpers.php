<?php

use Pnlinh\GoogleDistance\Facades\GoogleDistance;

if (!function_exists('google_distance')) {
    /**
     * Helper function.
     *
     * @param string      $origins
     * @param string      $destinations
     * @param string|null $overrideUnits
     *
     * @return int
     */
    function google_distance(string $origins, string $destinations, ?string $overrideUnits = null): int
    {
        return GoogleDistance::calculate($origins, $destinations, $overrideUnits);
    }
}
