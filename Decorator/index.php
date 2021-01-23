<?php

use patterns\Decorator\Notification;
use patterns\Decorator\NotificationInterface;
use patterns\Decorator\SlackDecorator;
use patterns\Decorator\SmsDecorator;

include '../../vendor/autoload.php';

// Client code
function sendNotification(NotificationInterface $notification)
{
    $to = '';
    $error = '';
    $notification->notify($to, $error);
}

$notification = new Notification();
$notification = new SmsDecorator($notification);
$notification = new SlackDecorator($notification);
sendNotification($notification);