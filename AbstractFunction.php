<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog, Cow};

$cat = new Cat();
$cat->name = "Luna";
$cat->run(); // Cat Luna is running

$dog = new Dog();
$dog->name = "James";
$dog->run(); // Dog James is running

$cow = new Cow();
$cow->name = "Lambo";
$cow->run(); // Cow Lambo is running