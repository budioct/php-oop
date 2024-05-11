<?php

/**
 * Magic Function
 * ● Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
 * ● Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
 * ● Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai
 *    constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
 * ● Masih banyak magic function lainnya, kita bisa melihatnya di link berikut :
 *    https://www.php.net/manual/en/language.oop5.magic.php
 */

require_once "data/Student.php";

use Data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->name = "budhi";
$student1->value = 100;
echo $student1 .PHP_EOL; // Student id: 1, name: budhi, value:100

$toString = (string) $student1; // cloning object (duplikasi ke variable)
echo $toString . PHP_EOL; // Student id: 1, name: budhi, value:100
