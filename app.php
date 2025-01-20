<?php
require_once __DIR__ . '/vendor/autoload.php';

use Artemd\Wptest25\CurrentTemp;

$helsinkiTemp = new CurrentTemp();
$data = $helsinkiTemp->getTemperature();
echo "Temperature: ".$data[0]."C \n";
echo "Humidity: ".$data[1]."%\n";
