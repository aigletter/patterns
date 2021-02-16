<?php


namespace patterns\Observer;


class Sms implements ListenerInterface
{

    public function listen($object)
    {
        echo 'Sent sms about order status: ' . $object->getStatus() . PHP_EOL;
    }

    public function getId()
    {
        return 'sms';
    }
}