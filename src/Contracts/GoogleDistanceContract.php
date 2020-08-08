<?php

namespace Pnlinh\GoogleDistance\Contracts;

interface GoogleDistanceContract
{
    /**
     * Calculate distance from origins to destinations.
     *
     * @param string $origins
     * @param string $destinations
     *
     * @return int
     */
    public function calculate($origins, $destinations): int;
}
