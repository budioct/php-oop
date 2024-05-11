<?php

/**
 * Namespace
 * ● Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
 * ● Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan
 *   jenis-jenis class
 * ● PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
 * ● Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu
 *   menyebutkan nama namespace nya
 * ● Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace
 *   nama class sama tidak akan menjadikan error di PHP
 *
 * Membuat Namespace
 * ● Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
 * ● Jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace
 *   sebelumnya
 */

namespace Data\one {
    class Conflict
    {

    }

    class Sample
    {

    }

    class Dummy
    {

    }
}

namespace Data\two {
    class Conflict
    {

    }
}
