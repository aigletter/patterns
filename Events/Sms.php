<?php


namespace patterns\Events;


class Sms implements ObserverInterface
{

    public function update($event, $instance)
    {
        echo 'С заказом произошло другое событие ' . $event . PHP_EOL;
    }
}