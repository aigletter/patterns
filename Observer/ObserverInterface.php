<?php


namespace patterns\Observer;


interface ObserverInterface
{
    public function attach(ListenerInterface $listener);

    public function detach(ListenerInterface $listener);
}