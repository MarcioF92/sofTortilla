<?php
// test.php
require_once "bootstrap.php";

$newProductName = "Category";

$product = new Category();
$product->setCategory($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Created Product with ID " . $product->getId() . "\n";

?>