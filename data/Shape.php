<?php

/**
 * parent Keyword
 * ● Kadang kita ingin mengakses function yang terdapat di class parent yang sudah terlanjur kita
 *    override di class child
 * ● Untuk mengakses function milik class parent, kita bisa menggunakan kata kunci parent
 * ● Sederhananya, parent digunakan untuk mengakses class parent
 *
 * Class::Nama_Method
 * parent::Nama_Method
 *
 */

namespace Data;

class Shape
{

    public function getCorner(): int
    {
        return -1;
    }

}

class Rectangle extends Shape
{

    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner()
    {
//        return Shape::getCorner(); // mengakses parent function
        return parent::getCorner(); // mengakses parent function dengan parent keyword
    }

}