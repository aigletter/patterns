<?php

include '../../vendor/autoload.php';

// ...
use patterns\Builder\UserBuilder;

$userBuilder = new UserBuilder();

$userBuilder->setName('Ivan');
$userBuilder->setAge(26);
$userBuilder->setSpeciality('programmer');

$user1 = $userBuilder->build();

print_r($user1);


$userBuilder = new UserBuilder();
$userBuilder->setSex('male');
$userBuilder->setWeight('85');

$user2 = $userBuilder->build();

print_r($user2);

$obj->run($user3);