<?php


namespace patterns\DI;


class Engine
{
    /**
     * @var Power
     */
    protected $power;

    public function __construct(Power $power)
    {
        $this->power = $power;
    }
}