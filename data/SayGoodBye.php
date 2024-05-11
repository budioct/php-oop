<?php

/**
 * Trait
 * ● Selain class dan interface, di PHP terdapat feature lain bernama trait
 * ● Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
 * ● Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu
 * ● Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class
 *    dengan trait
 * ● Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan
 *    ulang di beberapa class
 * ● Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use
 */

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

class Person
{
    use SayGoodBye, SayHello, HasName;
}
