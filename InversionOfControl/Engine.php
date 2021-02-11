<?php


namespace patterns\InversionOfControl;


class Engine implements EngineInterface
{
    protected $power;

    public function __construct($power)
    {
        $this->power = $power;
    }

    public function start()
    {
        // TODO: Implement start() method.
    }
}