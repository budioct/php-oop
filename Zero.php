<?php

/**
 * Overloading
 * ● Overloading adalah kemampuan secara dinamis membuat properties atau function
 * ● Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
 * ● Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
 * ● Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas
 *
 * Properties Overloading
 * ● Saat kita mengakses properties, maka secara otomatis properties akan diakses
 * ● Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara
 *    otomatis menjadikan itu error
 * ● PHP akan melakukan fallback ke magic function
 * ● Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic
 *    function tersebut
 * ● Ada beberapa magic function yang bisa kita gunakan untuk properties overloading
 *
 * Magic Function untuk Properties Overloading
 * Magic Function                    Keterangan
 * __set($name, $value) :            void Dieksekusi ketika mengubah properties yang tidak tersedia
 * __get($name) : mixed              Dieksekusi ketika mengakses properties yang tidak tersedia
 * __isset ($name ) : bool           Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
 * __unset($name) : void             Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
 *
 * Function Overloading
 * ● Saat kita mengakses function, maka secara otomatis function akan diakses
 * ● Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis
 *    menjadikan itu error
 * ● PHP akan melakukan fallback ke magic function
 * ● Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic
 *    function tersebut
 * ● Ada beberapa magic function yang bisa kita gunakan untuk function overloading
 *
 * Magic Function untuk Function Overloading
 * Magic Function                                           Keterangan
 * __call ( $name , $arguments ) : mixed                    Dieksekusi ketika memanggil function yang tidak tersedia
 * static __callStatic ( $name , $arguments ) : mixed       Dieksekusi ketika memanggil static function yang tidak tersedia
 */

class Zero
{
    private array $properties = []; // properties untuk menyimpan variable

    // ketika object instance lalu objectnya mengakses property yang belum ada, makan method ini akan di eksekusi
    public function __get(string $name)
    {
        //echo "Access Property $name" . PHP_EOL;
        return $this->properties[$name];
    }

    // ketika object instance lalu objectnya mengakses property yang belum ada dan di assaigment, maka method ini yang akan di eksekusi
    public function __set($name, $value)
    {
        //echo "Set Property $name with value $value" . PHP_EOL;
        $this->properties[$name] = $value;
    }

    // ketika object instance lalu objectnya mengakses property yang belum ada lalu checked isset(), maka method ini yang akan di eksekusi
    public function __isset(string $name): bool
    {
        //echo "Isset $name" . PHP_EOL;
        //return false;
        return isset($this->properties[$name]);
    }

    // ketika object instance lalu objectnya mengakses property yang belum ada lalu hapus variable unset(), maka method ini yang akan di eksekusi
    public function __unset(string $name): void
    {
        //echo "Unset $name" . PHP_EOL;
        unset($this->properties[$name]);
    }

    // ketika object instance lalu objectnya mengakses function yang belum ada, maka method ini yang akan di eksekusi
    public function __call(string $name, array $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }

    // ketika object instance lalu objectnya mengakses static function yang belum ada, maka method ini yang akan di eksekusi
    public static function __callStatic(string $name, array $arguments)
    {
        $join = join(", ", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }
}

// implement method magic untuk dynamic properties (properties overloading)
$zero = new Zero();

// __set() // untuk mengubah property
$zero->firstName = "budhi";
$zero->middleName = "oct";
$zero->lastName = "22";

// __get() // untuk ambil property
echo "First Name : $zero->firstName" . PHP_EOL; // First Name : budhi
echo "Middle Name : $zero->middleName" . PHP_EOL; // Middle Name : oct
echo "Last Name : $zero->lastName" . PHP_EOL; // Last Name : 22

// __isset() // mengecek apakah sudah di set sesuai property name nya
isset($zero->firstName); // Isset firstName

// __unset(); // untuk menghapus property berdasarkan  property name nya
unset($zero->firstName); // Unset firstName

// __call // untuk tampilkan function yang belum di buat di object
$zero->sayHello("budhi", "oct", "22"); // Call function sayHello with argument budhi, oct, 22

// __callStatic // untuk tampilkan static function yang belum di buat di object
Zero::sayHello("budhi", "oct", "22"); // Call function sayHello with argument budhi, oct, 22