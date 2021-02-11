<?php


namespace patterns\DI;


class Car
{
    protected $engine;

    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }
}