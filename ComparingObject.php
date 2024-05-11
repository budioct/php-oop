<?php

/**
 * Comparing Object
 * ● Sama seperti tipe data yang lain, untuk membandingkan dua buah object, kita bisa menggunakan
 *    operator == (equals) dan === (identity)
 * ● Operator == (equals) membandingkan semua properties yang terdapat di object tersebut, dan tiap
 *    properties juga akan dibandingkan menggunakan operator == (equals)
 * ● Sedangkan operator === (identity), maka akan membandingkan apakah object identik, artinya
 *    mengacu ke object yang sama
 */

require_once "data/Student.php";

use Data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->name = "budhi";
$student1->value = 100;


$student2 = new Student();
$student2->id = "1";
$student2->name = "budhi";
$student2->value = 100;

var_dump($student1 == $student2); // bool(true) // true kalau object nya sama semua
var_dump($student1 === $student2); // bool(false) // true kalau object nya sama semua secara object dan 2 lokasi memory yang juga sama