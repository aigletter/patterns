<?php

include '../../vendor/autoload.php';

use patterns\Singleton\Singleton;

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();
$obj3 = Singleton::getInstance();

/*var_dump($obj1);

var_dump($obj2);*/

print_r($obj1 === $obj2);