<?php

/**
 * Encapsulation
 * ● Encapsulation artinya memastikan data sensitif sebuah object tersembunyi dari akses luar
 * ● Hal ini bertujuan agar kita bisa menjaga agar data sebuah object tetap baik dan valid
 * ● Untuk mencapai ini, biasanya kita akan membuat semua properties menggunakan access modifier
 *    private, sehingga tidak bisa diakses atau diubah dari luar
 * ● Agar bisa diubah, kita akan menyediakan function untuk mengubah dan mendapatkan properties
 *    tersebut
 */

class Category
{

    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function getExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }


}