<?php

/**
 * __clone() Function
 * ● Kadang menyalin semua properties bukanlah yang kita inginkan
 * ● Misal saja kita hanya ingin menyalin beberapa properties saja, tidak ingin semuanya
 * ● Jika kita ingin memodifikasi cara PHP melakukan clone, kita bisa membuat function di dalam class
 *    nya dengan nama function __clone()
 * ● Function __clone() akan dipanggil di object hasil duplikasi setelah proses duplikasi selesai
 * ● Jadi jika kita ingin menghapus beberapa properties, bisa kita lakukan di function __clone()
 *
 * __toString() Function
 * ● __toString() function merupakan salah satu magic function yang digunakan sebagai representasi
 *    string sebuah object
 * ● Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 *
 * __invoke() Function
 * ● __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai
 *    function
 * ● Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis
 *    function __invoke() yang akan dieksekusi
 *
 * __debugInfo() Function
 * ● Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
 * ● Function var_dump() sebenarnya memanggil function __debugInfo()
 * ● Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
 *
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

    // ketika object instance atau cloning lalu objectnya di print method, maka __toString() yang akan di eksekusi
    public function __toString(): string
    {
      return "Student id: $this->id, name: $this->name, value:$this->value" . PHP_EOL;
    }

    // ketika object instance kita akses belum ada function nya , maka __invoke() yang akan di eksekusi
    public function __invoke(... $arguments): void
    {
        $join = join(", ", $arguments);
        echo "Invoke Student with arguments $join" . PHP_EOL;
    }

    // ketika object instance di var_dump($variable) makan __debugInfo() yang akan di eksekusi
    public function __debugInfo(): ?array
    {
        // kita initialize dengan array dengan properties object
        // kita bisa tambahkan informasi sendiri seperti: author dan version yang tidak mengambil dari properties
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Budhi",
            "version" => "1.0.0",
        ];
    }

}