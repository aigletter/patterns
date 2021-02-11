<?php

include '../../vendor/autoload.php';

$request = new \patterns\ChainOfResponsibility\Request();
$handler1 = new \patterns\ChainOfResponsibility\FirstHandler();
$handler2 = new \patterns\ChainOfResponsibility\SecondHandler();
$handler1->with($handler2);
$handler3 = new \patterns\ChainOfResponsibility\ThirdHandler();
$handler2->with($handler3);



$response = $handler1->handle($request);

exit();