<?php

require_once '../../vendor/autoload.php';

$order = new \patterns\Observer\Order();


$mailer = new \patterns\Observer\Mailer();
$order->attach($mailer);

$sms = new \patterns\Observer\Sms();
$order->attach($sms);


$order->changeStatus('sent');

$order->detach($sms);

$order->changeStatus('archive');

