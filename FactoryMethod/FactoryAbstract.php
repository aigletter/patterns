<?php


namespace patterns\FactoryMethod;


abstract class FactoryAbstract
{
    public function createProduct(): ProductInterface
    {
        return $this->createConcreteInstance();
    }

    protected abstract function createConcreteInstance();
}