<?php

/**
 * Constant
 * ● Properties di class bisa diubah, mirip seperti variable
 * ● Di class juga kita membuat constant, data yang tidak bisa diubah
 * ● Di materi PHP Dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
 * ● Namun sejak PHP 7.4, kita bisa menggunakan kata kunci const untuk membuat constant, mirip
 *    seperti variable, namun tidak menggunakan karakter $
 */

require_once "data\Person.php";

define("APPLICATION", "ANAK OM MAMAT VER 2"); // constant dasar php
const APP_VERSION = "1.0.0"; // constant sejak PHP 7.4

echo APPLICATION . PHP_EOL; // ANAK OM MAMAT VER 2
echo APP_VERSION . PHP_EOL; // 1.0.0

// akses constant, akses di dalam class
echo Person::AUTHOR . PHP_EOL; // ANAK OM MAMAT VERSION 2
