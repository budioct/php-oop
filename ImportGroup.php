<?php

/**
 * Group use Declaration
 * ● Kadang kita butuh melakukan import banyak hal di satu namespace yang sama
 * ● PHP memiliki fitur grup use, dimana kita bisa import beberapa class, function atau constant dalam
 *    satu perintah use
 * ● Untuk melakukan itu, kita bisa menggunakan kurung { }
 */

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\one\{Conflict as Conflict1, Dummy as Dump, Sample}; // import namespace dengan group {}, as sebagai Alias
use function Helper\{helpMe};

$conflict = new Conflict1(); // instance dari hasil import
$dummy = new Dump();
$sample = new Sample();
