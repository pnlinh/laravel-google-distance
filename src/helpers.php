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
    function google_distance($origins, $destinations)
    {
        return GoogleDistance::calculate($origins, $destinations);
    }
}
