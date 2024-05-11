<?php

/**
 * stdClass
 * ● stdClass adalah class kosong bawaan dari PHP
 * ● stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
 * ● stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object
 *    secara otomatis
 */

$array = array(
    "firstName" => "budhi",
    "lastName" => "octavisnayah",
);
var_dump($array);
// akses array
echo "array: {$array["firstName"]}" . PHP_EOL; // array: budhi
echo "array: {$array["lastName"]}" . PHP_EOL; // array: octavisnayah

echo PHP_EOL;

// konversi ke object(StdClass)
$stdObject = (object) $array;
var_dump($stdObject);
// akses object
echo "StdClass: {$stdObject->firstName}" . PHP_EOL; // StdClass: budhi
echo "StdClass: {$stdObject->lastName}" . PHP_EOL; // StdClass: octavisnayah

echo PHP_EOL;

// konversi ke array kembali
$arrayLagi = (array) $stdObject;
var_dump($arrayLagi);
// akses array
echo "arrayLagi: {$arrayLagi["firstName"]}" . PHP_EOL; // arrayLagi: budhi
echo "arrayLagi: {$arrayLagi["lastName"]}" . PHP_EOL; // arrayLagi: octavisnayah

echo PHP_EOL;

require_once "data/Person.php";

$person = new Person("budhi", "Tangerang");
var_dump($person);
echo PHP_EOL;

// konversi ke array
$arrayPerson = (array) $person;
var_dump($arrayPerson);
echo "arrayPerson: {$arrayPerson["name"]}" . PHP_EOL; // arrayPerson: budhi
echo "arrayPerson: {$arrayPerson["address"]}" . PHP_EOL; // arrayPerson: Tangerang
echo "arrayPerson: {$arrayPerson["country"]}" . PHP_EOL; // arrayPerson: Indonesia
echo "arrayPerson: {$arrayPerson["kecamatan"]}" . PHP_EOL; // arrayPerson:
