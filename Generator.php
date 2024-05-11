<?php

/**
 * Generator
 * ● Sebelumnya kita tahu bahwa untuk membuat object yang bisa di iterasi, kita menggunakan Iterator
 * ● Namun pembuatan Iterator secara manual sangatlah ribet
 * ● Untungnya di PHP, terdapat fitur generator, yang bisa kita gunakan untuk membuat Iterator secara
 *    otomatis hanya dengan menggunakan kata kunci yield
 */

function getGenap(int $max): Iterator
{
    $array = []; // untuk menampung hasil modulus
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }
    return new ArrayIterator($array); // array yang akan di consume oleh implement ArrayIterator dari kontrak Iterator

}

foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}

echo PHP_EOL;

function getGanjil(int $max): Iterator
{
    // lebih simple dengan Generator yield keyword
    // karna tidak perlu membuat array kosong dan return ArrayIterator
    // cukup dengan "yield $i"
    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }

}

foreach (getGanjil(100) as $value) {
    echo "Gajil : $value" . PHP_EOL;
}
