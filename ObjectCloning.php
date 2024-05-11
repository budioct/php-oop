<?php

/**
 * Object Cloning
 * ● Kadang kita ada kebutuhan untuk menduplikasi sebuah object
 * ● Biasanya untuk melakukan hal ini, kita bisa membuat object baru, lalu menyalin semua properties
 *    di object awal ke object baru
 * ● Untungnya PHP mendukung object cloning
 * ● Kita bisa menggunakan perintah clone untuk membuat duplikasi object
 * ● Secara otomatis semua properties di object awal akan di duplikasi ke object baru
 *
 * __clone() Function
 * ● Kadang menyalin semua properties bukanlah yang kita inginkan
 * ● Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
 * ● Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class
 *    nya dengan nama function __clone()
 * ● Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
 * ● Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
 */

require_once "data/Student.php";

use Data\Student;

$student1 = new Student();
$student1->id = "1";
$student1->name = "budhi";
$student1->value = 100;
$student1->setSample("XXX");
var_dump($student1);
echo PHP_EOL;

// duplikasi secara manual
$student2 = new Student();
$student2->id = $student1->id;
$student2->name = $student1->name;
$student2->value = $student1->value;
var_dump($student2);
echo PHP_EOL;

// duplikasi secara clone dari fitur php
// akan cloning (duplikasi) semua properties dan value ke variable baru
// NOTE: semua object properties visibilty akan di cloning / duplikasi  secara otomatis
$student3 = clone $student1;
var_dump($student3);
echo PHP_EOL;


