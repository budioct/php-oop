<?php

/**
 * Alias
 * ● Saat kita menggunakan use, artinya kita tidak perlu lagi menggunakan nama namespace diawal
 *    class ketika kita ingin membuat class tersebut
 * ● Namun bagaimana jika kita ternyata nama class nya sama?
 * ● Untungnya PHP memiliki fitur yang namanya alias
 * ● Alias adalah kemampuan membuat nama lain dari class, function atau constant yang ada
 * ● Kita bisa menggunakan kata kunci as setelah melakukan use
 */

require_once "data/Conflict.php";
require_once "data/Helper.php";

// mengunakan use keyword untuk penganti akses namespace supaya tidak banyak duplikasi
// menggunakan as keyword untuk ALIAS
use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflict1(); // akses alias
$conflict2 = new Conflict2(); // akses alias

help(); // akses alias

echo APP . PHP_EOL; // akses alias