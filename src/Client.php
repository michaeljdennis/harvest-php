<?php

namespace Harvest;

use GuzzleHttp\Client as HttpClient;

class Client
{
    private $accountId;

    private $token;

    private $userAgent;

    private $httpClient;

    public function __construct(HttpClient $httpClient)
    {
        $this->accountId = getenv('HARVEST_ACCOUNT_ID');
        $this->token = 'Bearer '.getenv('HARVEST_TOKEN');
        $this->userAgent = 'Harvest API Example';
        $this->httpClient = $httpClient;
    }

    public function get(string $endpoint): object
    {
        $headers = [
            'Harvest-Account-ID' => $this->accountId,
            'Authorization' => $this->token,
            'User-Agent' => $this->userAgent,
        ];

        $res = $this->httpClient->request(
            'GET',
            $endpoint,
            [
                'headers' => $headers,
            ]
        );

        return json_decode($res->getBody()->getContents());
    }
}
