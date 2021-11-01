<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getFranceData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://coronavirusapi-france.vercel.app/AllDataByDate?date=2020-04-19'
        );

        return $response->toArray();
    }
}
