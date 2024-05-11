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

$student1(); // Invoke Student with arguments
//$student1(1, 2, 3, "budhi", true); // Invoke Student with arguments 1, 2, 3, budhi, 1

/**
 * result
 * ketika argument belum di isi maka akan cetak
 * Invoke Student with arguments
 *
 * ketika argument sudah di isi maka akan cetak
 * Invoke Student with arguments 1, 2, 3, budhi, 1
 */
