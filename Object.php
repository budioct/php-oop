<?php

/**
 * Membuat Object
 * ● Object adalah hasil instansiasi dari sebuah class
 * ● Untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti dengan nama Class dan kurung ()
 */

require_once "data\Person.php"; // import class

$person1 = new Person("Budhi", "Tangerang");
$person2 = new Person("Joko", "Tangerang");
var_dump($person1);
var_dump($person2);

/**
 * result
 * object(Person)#1 (0) {
 * }
 * object(Person)#2 (0) {
 * }
 */