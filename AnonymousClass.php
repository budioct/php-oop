<?php

/**
 * Anonymous Class
 * ● Anonymous class atau class tanpa nama.
 * ● Adalah kemampuan mendeklarasikan class, sekaligus meng-instansiasi object-nya secara langsung
 * ● Anonymous class sangat cocok ketika kita berhadapan dengan kasus membuat implementasi
 *    interface atau abstract class sederhana, tanpa harus membuat implementasi class nya
 *
 * Constructor di Anonymous Class
 * ● Anonymous class juga mendukung constructor
 * ● Jadi kita bisa menambahkan constructor jika kita mau
 */

interface HelloWorld
{
    function sayHello(): void;
}

// dalam kasus ini tidak perlu buat object implement dari kontrak interface
//class SampleHelloWorld implements HelloWorld{
//    function sayHello(): void
//    {
//        echo "Hello World" . PHP_EOL;
//    }
//}

// jadi langsung saja instance dan implement kontrak interface (ini terjadi jika kasus sederhana saja)
$sampleHelloWorld = new class("budhi") implements HelloWorld{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$sampleHelloWorld->sayHello(); // Hello World
