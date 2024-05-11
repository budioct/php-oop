<?php

/**
 * Properties
 * ● Fields / Properties / Attributes adalah data yang bisa kita sisipkan di dalam Object
 * ● Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja yang
 *    dimiliki object tersebut di dalam deklarasi class-nya
 * ● Membuat field sama seperti membuat variable, namun ditempatkan di block class, namun diawali
 *    dengan kata kunci var
 *
 * Manipulasi Properties
 * ● Fields yang ada di object, bisa kita manipulasi.
 * ● Untuk memanipulasi data field, sama seperti cara pada variable
 * ● Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya
 */

require_once "data\Person.php"; // import class

$person = new Person(); // instance

// manipulasi properties / field / attribute
$person->name = "Budhi"; // object->properties = value
$person->address = "Tangerang";
//$person->country = "Indonesia";

echo "Name: $person->name" . PHP_EOL; // Name: Budhi
echo "Address: " . $person->address . PHP_EOL; // Address: Tangerang
echo "Country: {$person->country}" . PHP_EOL; // Country: Indonesia
