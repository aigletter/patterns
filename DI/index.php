<?php

include '../../vendor/autoload.php';

$config = include 'config.php';

$injector = new \patterns\DI\Injector($config);

$car = $injector->resolveDependencies(\patterns\DI\Car::class);

//$engine = $injector->resolveDependencies(\patterns\DI\Engine::class);

//$power = $injector->resolveDependencies(\patterns\DI\Power::class);

exit();