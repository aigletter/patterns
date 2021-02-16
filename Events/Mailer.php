<?php


namespace patterns\Events;


class Mailer implements ObserverInterface
{

    public function update($event, $instance)
    {
        echo 'С заказом произошло событие ' . $event . PHP_EOL;
    }
}