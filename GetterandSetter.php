<?php

require_once "data/Category.php";

$category = new Category();

$category->setName("Car"); // setter
$category->setExpensive(true);

$category->setName(""); // setter

// getter
echo "Category name {$category->getName()}" . PHP_EOL; // Category name Car
echo "Category expensive {$category->getExpensive()}" . PHP_EOL; // Category expensive 1