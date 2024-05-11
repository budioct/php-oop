<?php

require_once "data\Location.php";

use Data\{Location, City, Provice, Country};

// $location = new Location(); // ERROR karna abstract class tidak bisa menjadi object.. abstract class digunakan sebagai contract

$city = new City(); // class
$provice = new Provice();
$country = new Country();