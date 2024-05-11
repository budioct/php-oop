<?php

require_once "data\Product.php";

// akses visibility modifier method dan properties dari class

$product = new Product("Apple", 15000);

echo $product->getName() . PHP_EOL; // Apple
echo $product->getPrice() . PHP_EOL; // 15000

$productDummy = new ProductDummy("Dummy", 500);
$productDummy->info(); // Name Dummy Price 500