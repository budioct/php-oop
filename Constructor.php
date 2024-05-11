<?php

/**
 * Constructor
 * ● Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita
 *    menggunakan kurung ()
 * ● Di dalam class PHP, kita bisa membuat constructor, constructor adalah function yang akan
 *    dipanggil saat pertama kali Object dibuat.
 * ● Mirip seperti di function, kita bisa memberi parameter pada constructor
 * ● Nama constructor di PHP haruslah __construct()
 */

require_once "data\Person.php";

$person = new Person("mamat", "solo");

echo "Name: $person->name" . PHP_EOL; // Name: mamat
echo "Address: " . $person->address . PHP_EOL; // Address: solo
echo "Country: {$person->country}" . PHP_EOL; // Country: Indonesia
echo "Kecamatan: {$person->kecamatan}" . PHP_EOL; // Kecamatan:
