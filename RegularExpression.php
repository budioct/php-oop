<?php

/**
 * Regular Expression
 * ● PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
 * ● Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string
 *    menggunakan pola tertentu
 * ● Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit
 *    pengenalannya
 * ● Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini :
 *    https://www.php.net/manual/en/pcre.pattern.php
 *
 * Function Regular Expression                              Keterangan
 * preg_match ($pattern ,$subject)                          Digunakan untuk mencari match pattern
 * preg_match_all ($pattern ,$subject)                      Digunakan untuk mencari match pattern
 * preg_replace ( $pattern , $replacement, $subject)        Digunakan untuk mereplace semua pattern dengan replacement
 * preg_split ( $pattern , $subject)                        Digunakan untuk memotong dengan pattern menjadi array
 */

$matches = [];
$result = preg_match_all("/budhi|vian|ss/i", "budhi octaviansyah asek joss", $matches); // hasil match yang cocok dengan pattern akan di referensikan ke variable

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!"); // hasil match yang cocok dengan pattern akan di replacement

var_dump($result);

$result = preg_split("/[\s,-]/", "Budhi Octaviansyah,Anak,Om-Mamat"); // regek advance.. \s (spaci) ,(koma) -(strip)

var_dump($result);

/**
 * result:
 * // jumlah data
 * int(3)
 *
 * // regex matches,  data yang di referensikan ke variable
 * array(1) {
 * [0]=>
 * array(3) {
 * [0]=>
 * string(5) "budhi"
 * [1]=>
 * string(4) "vian"
 * [2]=>
 * string(2) "ss"
 * }
 * }
 *
 * // regex replacement
 * string(21) "dasar lu *** dan ***!"
 *
 * // regex advance
 * array(5) {
 * [0]=>
 * string(5) "Budhi"
 * [1]=>
 * string(12) "Octaviansyah"
 * [2]=>
 * string(4) "Anak"
 * [3]=>
 * string(2) "Om"
 * [4]=>
 * string(5) "Mamat"
 * }
 */