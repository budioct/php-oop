<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

// akses static --> Class::properties
echo MathHelper::$name . PHP_EOL; // MathHelper

MathHelper::$name = "budhi octaviansyah"; // manipulasi object static
echo MathHelper::$name . PHP_EOL; // budhi octaviansyah

$result = MathHelper::sum(1,2,3,4,5); // akses method static
echo "Result : $result" . PHP_EOL; // Result : 15