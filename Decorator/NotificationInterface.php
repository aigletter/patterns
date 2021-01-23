<?php


namespace patterns\Decorator;


interface NotificationInterface
{
    public function notify(string $to, $error);
}