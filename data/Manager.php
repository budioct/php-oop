<?php

/**
 * Inheritance
 * ● Inheritance atau pewarisan adalah kemampuan untuk menurunkan sebuah class ke class lain
 * ● Dalam artian, kita bisa membuat class Parent dan class Child
 * ● Class Child, hanya bisa punya satu class Parent, namun satu class Parent bisa punya banyak class Child
 * ● Saat sebuah class diturunkan, maka semua properties dan function yang ada di class Parent, secara
 *    otomatis akan dimiliki oleh class Child
 * ● Untuk melakukan pewarisan, di class Child, kita harus menggunakan kata kunci extends lalu diikuti
 *    dengan nama class parent nya.
 *
 * Function Overriding
 * ● Function overriding adalah kemampuan mendeklarasikan ulang function di child class, yang sudah
 *    ada di parent class
 * ● Saat kita melakukan proses overriding tersebut, secara otomatis ketika kita membuat object dari
 *    class child, function yang di class parent tidak bisa diakses lagi
 *
 * Constructor Overriding
 * ● Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di
 *    class Child nya
 * ● Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun
 *    sangat tidak disarankan
 * ● Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan
 *    WARNING
 * ● Namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah
 *    arguments nya, namun direkomendasikan untuk memanggil parent constructor
 *
 */

class Manager {
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager {

    public function __construct(string $name = "")
    {
        // tidak wajib tetapi di rekomendasikan
        parent::__construct($name, "Vice President"); // constractor overriding
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is Vice President $this->name" . PHP_EOL;
    }

}