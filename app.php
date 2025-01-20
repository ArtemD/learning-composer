<?php
require_once __DIR__ . '/vendor/autoload.php';

use Artemd\Wptest25\CurrentTemp;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$helsinkiTemp = new CurrentTemp();
$data = $helsinkiTemp->getTemperature($_ENV['API_URL']);
echo "Temperature: ".$data[0]."C \n";
echo "Humidity: ".$data[1]."%\n";
