<?php


namespace patterns\Events;


interface SubjectInterface
{
    public function attach(string $event, ObserverInterface $listener);

    public function detach(string $event, ObserverInterface $listener);
}