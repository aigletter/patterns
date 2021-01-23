<?php


namespace patterns\Decorator;


abstract class DecoratorAbstract implements NotificationInterface
{
    protected $service;

    public function __construct(NotificationInterface $service)
    {
        $this->service = $service;
    }
}