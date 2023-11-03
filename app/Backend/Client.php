<?php


namespace App\Backend;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\GuzzleException;

class Client
{
    protected GuzzleClient $client;

    protected array $options;

    public function __construct()
    {
        $this->client  = new GuzzleClient(['base_uri' => env('BACKEND_GATEWAY')]);
        $this->options = [
            'allow_redirects' => [
                'max' => 20,

            ],
            'verify'          => false,
            'http_errors'     => false,
        ];
    }

    public function storeLandingpageLead($data)
    {
        $request['query'] = array_merge(['api_token' => env('BACKEND_API_TOKEN')], $data);
        $request          = array_merge($request, $this->options);
        $response         = $this->client->request('POST', 'api/landingpageLeads', $request);

        return json_decode((string)$response->getBody());
    }

    /**
     * @param int $customerId
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function checkStatus(int $customerId)
    {
        $request['query'] = ['api_token' => env('BACKEND_API_TOKEN')];
        $request          = array_merge($request, $this->options);
        $response         = $this->client->request('GET', "api/customer/{$customerId}/status", $request);

        return json_decode((string)$response->getBody());
    }

}
