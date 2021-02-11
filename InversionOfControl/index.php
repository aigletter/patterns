<?php

use \patterns\InversionOfControl\Car;
use patterns\InversionOfControl\DiselEngine;
use patterns\InversionOfControl\Engine;

include '../../vendor/autoload.php';

$engine = new Engine(200);
$diselEngine = new DiselEngine(150);

$car = new Car($engine);
$car2 = new Car($diselEngine);

$kpp = new \patterns\InversionOfControl\Kpp();
$car->setKpp($kpp);

exit();