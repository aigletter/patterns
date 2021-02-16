<?php


namespace patterns\Events;


interface ObserverInterface
{
    public function update($event, $instance);
}