<?php

require_once "data/Car.php";
use Data\{Inova};

$car = new Inova();
$car->drive() . PHP_EOL; // Drive Inova
echo "tire {$car->getTire()}" . PHP_EOL; // tire 4
echo "brand {$car->getBrand()}" . PHP_EOL; // brand Toyota
echo "maintenance {$car->IsMaintenance()}" . PHP_EOL; // maintenance 1