<?php


namespace patterns\InversionOfControl;


class Car
{
    /**
     * @var EngineInterface
     */
    protected $engine;

    /**
     * @var Kpp
     */
    protected $kpp;

    public function __construct(EngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function setKpp(Kpp $kpp)
    {
        $this->kpp = $kpp;
    }
}