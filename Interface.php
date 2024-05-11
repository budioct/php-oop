<?php

require_once "data/Car.php";
use Data\{Inova};

$car = new Inova();
$car->drive();
echo $car->getTire();
