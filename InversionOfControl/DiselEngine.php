<?php


namespace patterns\InversionOfControl;


class DiselEngine implements EngineInterface
{
    protected $power;

    public function __construct($power)
    {
        $this->power = $power;
    }
}