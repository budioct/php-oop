<?php

/**
 * use Keyword
 * ● Sebelumnya kita sudah tahu bahwa untuk menggunakan class, function atau constant di
 *    namespace kita perlu menyebutkan nama namespace nya di awal
 * ● Jika terlalu sering menggunakan class, function atau constant yang sama, maka terlalu banyak
 *    duplikasi dengan menyebut namespace yang sama berkali-kali
 * ● Hal ini bisa kita hindari dengan cara mengimport class, function atau constant tersebut dengan
 *    menggunakan kata kunci use
 */

require_once "data/Conflict.php";
require_once "data/Helper.php";

// mengunakan use keyword untuk penganti akses namespace supaya tidak banyak duplikasi
use Data\one\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict(); // akses namespace yang menggunakan use keyword
$conflict2 = new Data\two\Conflict(); // akses yang tidak menggunakan use keyword

helpMe(); // akses namespace yang menggunakan use keyword

echo APPLICATION . PHP_EOL; // akses namespace yang menggunakan use keyword
