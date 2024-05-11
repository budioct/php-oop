<?php

/**
 * Function
 * ● Selain menambahkan properties, kita juga bisa menambahkan function ke object
 * ● Cara dengan mendeklarasikan function tersebut di dalam block class
 * ● Sama seperti function biasanya, kita juga bisa menambahkan return value dan parameter
 * ● Untuk mengakses function tersebut, kita bisa menggunakan tanda -> dan diikuti dengan nama
 *    method nya. Sama seperti mengakses properties
 */

require_once "data/Person.php";

$person = new Person(); // instance

$person->name = "budhi";
$person->address = "Tangerang";
$person->kecamatan = "Maju Mundur";

$person->sayHello("budhi"); // Hello budhi
$person->sayHello("jamal"); // Hello jamal

$person->sayHelloBro("sarah"); // Hello sarah, my name is budhi
$person->sayHelloBro(null); // Hi, my name is budhi
