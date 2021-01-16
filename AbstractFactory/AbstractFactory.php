<?php


namespace patterns\AbstractFactory;


abstract class AbstractFactory
{
    public abstract function createHeader(): HeaderInterface;

    public abstract function createBody(): BodyInterface;

    public abstract function createFooter(): FooterInterface;
}