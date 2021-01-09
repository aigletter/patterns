<?php

include '../../vendor/autoload.php';

use patterns\FactoryMethod\FactoryProduct1;
use patterns\FactoryMethod\FactoryProduct2;

$products = [];

$factoryProduct1 = new FactoryProduct1();
$factoryProduct2 = new FactoryProduct2();

$products[] = $factoryProduct1->createProduct();
$products[] = $factoryProduct2->createProduct();

print_r($products);