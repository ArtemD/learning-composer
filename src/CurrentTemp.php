<?php
namespace Artemd\Wptest25;

use GuzzleHttp\Client;

class CurrentTemp
{
    public function getTemperature($url)
    {

        $client = new Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);
        $currentTemperature = $data['current']['temperature_2m'];
        $currentHumidity = $data['current']['relative_humidity_2m'];
        return [$currentTemperature, $currentHumidity];
    }
}
