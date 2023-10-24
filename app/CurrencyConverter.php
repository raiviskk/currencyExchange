<?php

namespace App;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class CurrencyConverter
{
    private string $apiKey;
    private string $apiUrl;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->apiUrl = "https://api.fastforex.io/convert";
    }

    /**
     * @throws GuzzleException
     */
    public function convertCurrency($baseCurrency, $exchangeCurrency, $amount): ?CurrencyConversion
    {
        $url = "{$this->apiUrl}?from={$baseCurrency}&to={$exchangeCurrency}&amount={$amount}&api_key={$this->apiKey}";
        $client = new Client();


            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody(), true);

            if (isset($data['result'])) {
                $result = $data['result'];
                return new CurrencyConversion(
                    new Currency($baseCurrency, $result['rate']),
                    $amount,
                    $result,
                    $result['rate'],

                );
            }

        return null;

    }
}