<?php


namespace patterns\AbstractFactory;


class XmlFactory extends AbstractFactory
{

    public function createHeader(): HeaderInterface
    {
        return new XmlHeader();
    }

    public function createBody(): BodyInterface
    {
        return new XmlBody();
    }

    public function createFooter(): FooterInterface
    {
        return new XmlFooter();
    }
}