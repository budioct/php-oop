<?php

/**
 * Interface
 * ● Sebelumnya kita sudah tahu bahwa abstract class bisa kita gunakan sebagai kontrak untuk class
 *    child nya.
 * ● Namun sebenarnya yang lebih tepat untuk kontrak adalah Interface
 * ● Jangan salah sangka bahwa Interface disini bukanlah User Interface
 * ● Interface mirip seperti abstract class, yang membedakan adalah di Interface, semua method
 *    otomatis abstract, tidak memiliki block
 * ● Di interface kita tidak boleh memiliki properties, kita hanya boleh memiliki constant
 * ● Untuk mewariskan interface, kita tidak menggunakan kata kunci extends, melainkan implements
 * ● Dan berbeda dengan class, kita bisa implements lebih dari satu interface
 *
 * Interface Inheritance
 * ● Sebelumnya kita sudah tahu kalo di PHP, child class hanya bisa punya 1 class parent
 * ● Namun berbeda dengan interface, sebuah child class bisa implement lebih dari 1 interface
 * ● Bahkan interface pun bisa implement interface lain, bisa lebih dari 1. Namun jika interface ingin
 *    mewarisi interface lain, kita menggunakan kata kunci extends, bukan implements
 */

namespace Data;

interface HasBrand{
    function getBrand(): string;
}

interface IsMaintenance{
    function IsMaintenance(): bool;
}

interface Car extends HasBrand
{

    function drive(): void;

    function getTire(): int;

}

class Inova implements Car, IsMaintenance {

    function drive(): void
    {
        echo "Drive Inova" . PHP_EOL;
    }

    function getTire(): int
    {
       return 4;
    }

    function getBrand(): string
    {
        return "Toyota";
    }

    function IsMaintenance(): bool
    {
       return true;
    }
}
