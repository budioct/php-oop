<?php

/**
 * __clone() Function
 * ● Kadang menyalin semua properties bukanlah yang kita inginkan
 * ● Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
 * ● Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class
 *    nya dengan nama function __clone()
 * ● Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
 * ● Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
 */

namespace Data;

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    // implement function cloning.. untuk memodifikasi hasil clone nyaa
    public function __clone(): void
    {
        unset($this->sample); // unset() hapus properties // tidak akan di clone / duplikasi
    }

}