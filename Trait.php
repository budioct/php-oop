<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Budhi"); // Good Bye Budhi
$person->hello("Adam"); // Hello Adam

$person->name = "jamal";
var_dump($person);

/**
 * result
 * object(Data\Traits\Person)#1 (1) {
 * ["name"]=>
 * string(5) "jamal"
 * }
 */