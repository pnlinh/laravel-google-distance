<?php

namespace Pnlinh\GoogleDistance;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Pnlinh\GoogleDistance\Contracts\GoogleDistanceContract;

class GoogleDistance implements GoogleDistanceContract
{
    /** @var string */
    private $apiUrl = 'https://maps.googleapis.com/maps/api/distancematrix/json';

    /** @var string */
    private $apiKey;

    /** @var string */
    private $origins;

    /** @var string */
    private $destinations;

    /** @var */
    private $units;

    /**
     * GoogleDistance constructor.
     *
     * @param string $apiKey
     * @param string $units
     */
    public function __construct($apiKey, $units = 'imperial')
    {
        $this->apiKey = $apiKey;
        $this->units = $units;
    }

    /**
     * Get API_KEY.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Get units.
     *
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Set units.
     *
     * @param $units
     *
     * @return GoogleDistance
     */
    public function setUnits($units): self
    {
        $this->units = $units;

        return $this;
    }

    /**
     * Get origins.
     *
     * @return string
     */
    public function getOrigins()
    {
        return $this->origins;
    }

    /**
     * Set origins.
     *
     * @param string $origins
     *
     * @return GoogleDistance
     */
    public function setOrigins($origins): self
    {
        $this->origins = $origins;

        return $this;
    }

    /**
     * Get destinations.
     *
     * @return string
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Set destinations.
     *
     * @param string $destinations
     *
     * @return GoogleDistance
     */
    public function setDestinations($destinations): self
    {
        $this->destinations = $destinations;

        return $this;
    }

    /**
     * Caculate distance from origins to destinations.
     *
     * @param string $origins
     * @param string $destinations
     * @param string|null $overrideUnits
     *
     * @return int
     * @throws GuzzleException
     */
    public function calculate($origins, $destinations, $overrideUnits = null): int
    {
        $client = new Client();

        try {
            $response = $client->get($this->apiUrl, [
                'query' => [
                    'units'        => $overrideUnits ?? $this->units,
                    'origins'      => $origins,
                    'destinations' => $destinations,
                    'key'          => $this->getApiKey(),
                    'random'       => random_int(1, 100),
                ],
            ]);

            $statusCode = $response->getStatusCode();

            if (200 === $statusCode) {
                $responseData = json_decode($response->getBody()->getContents());

                if (isset($responseData->rows[0]->elements[0]->distance)) {
                    return $responseData->rows[0]->elements[0]->distance->value;
                }
            }

            return -1;
        } catch (Exception $e) {
            return -1;
        }
    }
}
