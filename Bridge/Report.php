<?php


namespace patterns\Bridge;


class Report
{
    protected $printer;

    public function __construct(PrintInterface $printer)
    {
        $this->printer = $printer;
    }

    public function getData()
    {
        // Полезный код
        return 'Полезный контент';
    }

    public function print()
    {
        $data = $this->getData();
        $this->printer->print($data);
    }

}