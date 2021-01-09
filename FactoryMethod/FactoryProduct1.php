<?php


namespace patterns\FactoryMethod;


class FactoryProduct1 extends FactoryAbstract
{

    protected function createConcreteInstance()
    {
        return new Product1();
    }
}