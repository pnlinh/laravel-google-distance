<?php

use Pnlinh\GoogleDistance\Facades\GoogleDistance;

if (!function_exists('google_distance')) {
    /**
     * @author pnlinh
     *
     * @param string $origins
     * @param string $destinations
     *
     * @return int
     */
    function google_distance($origins, $destinations)
    {
        return GoogleDistance::calculate($origins, $destinations);
    }
}
