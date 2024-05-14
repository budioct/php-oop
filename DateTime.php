<?php

/**
 * DateTime
 * ● Biasanya dalam bahasa pemrograman sudah disediakan cara untuk memanipulasi data waktu,
 *    termasuk di PHP
 * ● Di PHP, kita bisa menggunakan class DateTime untuk memanipulasi data waktu
 * ● Ada banyak sekali function di class DateTime yang bisa kita gunakan untuk memanipulasi data
 *    waktu
 *
 * DateTime Function                            Keterangan
 * setTime($hour, $minute, $second)             Mengubah waktu DateTime
 * setDate($year, $month, $day)                 Mengubah tanggal DateTime
 * setTimestamp($unixTimestamp)                 Mengubah unix timestamp DateTime
 *
 * note: DateTime php ini mengikuti configure php.ini
 *
 */

$datetime = new DateTime();

$datetime->setDate(1996, 10, 22); // manipulasi tanggal
$datetime->setTime(10, 10, 10 ,0); // manipulasi waktu

var_dump($datetime);

/**
 * result:
 * // setDate
 * object(DateTime)#1 (3) {
 * ["date"]=>
 * string(26) "1996-10-22 15:20:56.719351"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(12) "Asia/Jakarta"
 * }
 *
 * // setTime()
 * object(DateTime)#1 (3) {
 * ["date"]=>
 * string(26) "1996-10-22 10:10:10.000000"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(12) "Asia/Jakarta"
 * }
 *
 */

/**
 * DateInterval (Membuat Durasi)
 * ● Kadang kita hanya ingin memanipulasi waktu dan tanggal sebagian saja, misal hanya menambah 1
 *    tahun, atau mengurai beberapa hari
 * ● Hal ini bisa dilakukan dengan function add milik DateTime
 * ● Namun function add tersebut menerima parameter berupa DateInterval
 * ● Saat menggunakan DateInterval duration, kita perlu menentukan berapa banyak kita menambah
 *    interval
 * ● Kita bisa lihat detailnya disini : https://www.php.net/manual/en/dateinterval.construct.php
 * ● Untuk pembuatan duration, harus diawali dengan karakter P yang artinya period
 *
 * duration Period Designators
 * Period Designator    Description
 * Y                    years
 * M                    months
 * D                    days
 * W                    weeks. Converted into days. Prior to PHP 8.0.0, can not be combined with D.
 * H                    hours
 * M                    minutes
 * S                    seconds
 */

$datetime->add(new DateInterval('P1Y')); // tambah durasi 1 tahun

$minusOneMonth = new DateInterval('P1M'); // buat instance 1 bulan
$minusOneMonth->invert = 1; // value properti dari invert adalah 1 / true
$datetime->add($minusOneMonth);
var_dump($datetime);

/**
 * result:
 * object(DateTime)#1 (3) {
 * ["date"]=>
 * string(26) "1997-09-22 10:10:10.000000"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(12) "Asia/Jakarta"
 * }
 */


/**
 * DateTimeZone
 * ● Saat kita membuat object DateTime, dia akan secara otomatis membuat waktu saat ini sesuai
 *    dengan timezone yang di setting di konfigurasi date.timezone di file php.ini
 * ● Atau kita bisa menggunakan function setTimeZone untuk mengubah timezone DateTime
 */

$now = new DateTime();
var_dump($now);

$now->setTimezone(new DateTimeZone('America/New_York'));
var_dump($now);

/**
 * result:
 * object(DateTime)#3 (3) {
 * ["date"]=>
 * string(26) "2024-05-14 15:34:31.682480"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(12) "Asia/Jakarta"
 * }
 *
 * // rubah timezone
 * object(DateTime)#3 (3) {
 * ["date"]=>
 * string(26) "2024-05-14 04:34:31.682480"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(16) "America/New_York"
 * }
 */

/**
 * Format DateTime
 * ● Kadang kita ingin membuat representasi string dari DateTime yang sudah kita buat
 * ● Hal ini bisa kita lakukan menggunakan function format()
 * ● Function format() menerima argument berupa format string, ini bisa kita gunakan untuk
 *    memanipulasi cara kita menampilkan string format waktu
 * ● Untuk detailnya kita bisa lihat di halaman dokumentasi resminya
 * ● https://www.php.net/manual/en/datetime.format.php
 */

// Datetime convert ke string
$convertToString = $now->format('Y-m-d H:i:s'); // formate dari Datetime ke string
echo "Waktu Saat Ini: $convertToString"; // Waktu Saat Ini: 2024-05-14 04:44:42

// string convert ke Datetime
$dateTime = DateTime::createfromFormat('Y-m-d H:i:s', "2023-03-01 10:10:10", new DateTimeZone('Asia/Jakarta'));
if ($dateTime){
    echo "\n";
    var_dump($dateTime);
} else{
    echo "\n";
    echo "Salah Format"; // Salah Format
}

/**
 * result
 * Waktu Saat Ini: 2024-05-14 04:49:01
 *
 * object(DateTime)#5 (3) {
 * ["date"]=>
 * string(26) "2023-03-01 10:10:10.000000"
 * ["timezone_type"]=>
 * int(3)
 * ["timezone"]=>
 * string(12) "Asia/Jakarta"
 * }
 *
 */