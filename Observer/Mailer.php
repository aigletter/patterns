<?php


namespace patterns\Observer;


class Mailer implements ListenerInterface
{
    protected $config;

    public function sendMail($order)
    {
        echo 'Status was changed to ' . $order->getStatus() . '. Send mail' . PHP_EOL;
    }

    public function listen($object)
    {
        $this->sendMail($object);
    }

    public function getId()
    {
        return 'mailer';
    }
}