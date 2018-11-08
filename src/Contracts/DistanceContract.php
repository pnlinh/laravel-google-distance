<?php

namespace Pnlinh\GoogleDistance\Contracts;

interface DistanceContract
{
    /**
     * Calculate distance from origins to destinations.
     *
     * @param $origins
     * @param $destinations
     *
     * @return int
     */
    public function calculate($origins, $destinations): int;
}
