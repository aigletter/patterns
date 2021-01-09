<?php


namespace patterns\FactoryMethod;


class Product2 implements ProductInterface
{
    protected $price;

    protected $delivery;

    public function calculateTotalPrice(): float
    {
        return $this->price + $this->delivery;
    }
}