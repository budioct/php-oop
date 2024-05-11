<?php

/**
 * Abstract Function
 * ● Saat kita membuat class yang abstract, kita bisa membuat abstract function juga di dalam class
 *    abstract tersebut
 * ● Saat kita membuat sebuah abstract function, kita tidak boleh membuat block function untuk
 *    function tersebut
 * ● Artinya, abstract function wajib di override di class child
 * ● Abstract function tidak boleh memiliki access modifier private
 */

namespace Data;

abstract class Animal
{

    public string $name;

    abstract public function run(): void;

}

class Cat extends Animal
{

    // implement abstract method
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{

    // implement abstract method
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}

class Cow extends Animal
{

    // implement abstract method
    public function run(): void
    {
        echo "Cow $this->name is running" . PHP_EOL;
    }
}