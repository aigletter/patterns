<?php

require_once '../../vendor/autoload.php';

$evenManager = new \patterns\Events\EventManager();
$mailer = new \patterns\Events\Mailer();

$evenManager->attach(\patterns\Events\Order::EVENT_UPDATE_STATUS, $mailer);
$sms = new \patterns\Events\Sms();
$evenManager->attach(\patterns\Events\Order::EVENT_TEST_SOMETHING, $sms);



$order = new \patterns\Events\Order($evenManager);

$order->changeStatus('test status');

$order->testSomething();