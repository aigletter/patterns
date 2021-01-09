<?php


namespace patterns\FactoryMethod;


class FactoryProduct2 extends FactoryAbstract
{

    protected function createConcreteInstance()
    {
        return new Product2();
    }
}