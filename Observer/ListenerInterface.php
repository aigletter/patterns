<?php


namespace patterns\Observer;


interface ListenerInterface
{
    public function listen($object);

    //
    public function getId();
}