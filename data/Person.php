<?php

/**
 * Apa itu Object?
 * ● Object adalah data yang berisi field / properties / attributes dan method / function / behavior
 *
 * Apa itu Class?
 * ● Class adalah blueprint, prototype atau cetakan untuk membuat Object
 * ● Class berisikan deklarasi semua properties dan functions yang dimiliki oleh Object
 * ● Setiap Object selalu dibuat dari Class
 * ● Dan sebuah Class bisa membuat Object tanpa batas
 *
 * Membuat Class
 * ● Untuk membuat class, kita bisa menggunakan kata kunci class
 * ● Penamaan class biasa menggunakan format CamelCase
 *
 * Properties Type Declaration
 * ● Sama seperti di function, di properties pun, kita bisa membuat type declaration
 * ● Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan
 * ● Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
 * ● Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
 * ● Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
 *
 * Default Properties Value
 * ● Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
 * ● Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut
 *
 * Nullable Properties
 * ● Saat kita menambah type declaration di properties atau di function argument, maka secara
 *   otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tersebut
 * ● Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
 * ● Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
 */

class Person
{
    var string $name;
    var string $address;
    var string $country = "Indonesia"; // default properties value
    var ?string $kecamatan = null; // Nullable Properties sejak PHP 7.4


}