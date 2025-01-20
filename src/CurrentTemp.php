<?php
namespace Artemd\Wptest25;

use GuzzleHttp\Client;

class CurrentTemp
{
    public function getTemperature()
    {
        $url = "https://api.open-meteo.com/v1/forecast?latitude=60.1695&longitude=24.9354&current=temperature_2m,relative_humidity_2m,precipitation&hourly=temperature_2m&forecast_days=1";

        $client = new Client();
        $response = $client->request('GET', $url);
        $data = json_decode($response->getBody(), true);
        $currentTemperature = $data['current']['temperature_2m'];
        $currentHumidity = $data['current']['relative_humidity_2m'];
        return [$currentTemperature, $currentHumidity];
    }
}
