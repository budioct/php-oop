<?php

/**
 * Object Iteration
 * ● Saat kita membuat object dari sebuah class, kita bisa melakukan iterasi ke semua properties yang
 *    terdapat di object tersebut menggunakan foreach
 * ● Hal ini mempermudah kita saat ingin mengakses semua properties yang ada di object
 * ● Secara default, hanya properties yang public yang bisa diakses oleh foreach
 *
 * Iterator
 * ● Sebelumnya kita melakukan iterasi data di properties secara otomatis menggunakan foreach
 * ● Jika kita ingin menangani hal ini secara manual, kita bisa menggunakan Iterator
 * ● Iterator adalah interface yang digunakan untuk melakukan iterasi, namun membuat Iterator secara
 *    manual lumayan cukup ribet, oleh karena itu sekarang kita akan gunakan ArrayIterator, yaitu
 *    iterator yang menggunakan array sebagai data iterasi nya
 * ● Dan agar class kita bisa di iterasi secara manual, kita bisa menggunakan interface
 *    IteratorAggregate, disana kita hanya butuh meng-override function getIterator() yang
 *    mengembalikan data Iterator

 */

class Data implements IteratorAggregate
{
    var string $first = "First";
    public string $second = "Second";
    protected string $third = "Third";
    private string $forth = "Forth";

//    public function getIterator()
//    {
//        // initialize dari properties class ke array yang akan di consume oleh implement ArrayIterator
//        $array = [
//            "first" => $this->first,
//            "second" => $this->second,
//            "third" => $this->third,
//            "forth" => $this->forth,
//        ];
//
//         return new ArrayIterator($array);
////        $iterator = new ArrayIterator($array);
////        return $iterator;
////    }

    public function getIterator()
    {
        // lebih simple
        // initialize dari properties dengan keyword yield
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "forth" => $this->forth;

    }

}

$data = new Data;

// saat melakukan foreach ini akan memangil IteratorAggregate yang di implement ArrayIterator($array)
// walaupun properties visibility ada protected dan private ini akan bisa di akses oleh IteratorAggregate
foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}

/**
 * result
 * tidak implement IteratorAggregate dan ArrayIterator
 * first : First
 * second : Second
 *
 * SETELAH IMPLEMENT IteratorAggregate dan ArrayIterator
 * first : First
 * second : Second
 * third : Third
 * forth : Forth
 */
