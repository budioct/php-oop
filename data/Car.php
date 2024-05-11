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
 */

namespace Data;

interface Car
{

    function drive(): void;

    function getTire(): int;

}

class Inova implements Car {

    function drive(): void
    {
        echo "Drive Inova" . PHP_EOL;
    }

    function getTire(): int
    {
       return 4;
    }
}
