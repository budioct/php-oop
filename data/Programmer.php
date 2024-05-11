<?php

/**
 * Polymorphism
 * ● Polymorphism berasal dari bahasa Yunani yang berarti banyak bentuk.
 * ● Dalam OOP, Polymorphism adalah kemampuan sebuah object berubah bentuk menjadi bentuk lain
 * ● Polymorphism erat hubungannya dengan Inheritance
 */

class Programmer
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer; // polymorphism sebagai properties
}

// polymorphism sebagai argument parameter
function sayHelloProgrammer(Programmer $programmer){
    echo "Hello Programmer $programmer->name" . PHP_EOL;
}