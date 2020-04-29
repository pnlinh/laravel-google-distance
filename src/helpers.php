<?php

use Pnlinh\GoogleDistance\Facades\GoogleDistance;

if (!function_exists('google_distance')) {
    /**
     * @author pnlinh
     *
     * @param $origins
     * @param $destinations
     *
     * @return string
     */
    function google_distance($origins, $destinations, $units_override=false)
    {
        return GoogleDistance::calculate($origins, $destinations, $units_override);
    }
}
