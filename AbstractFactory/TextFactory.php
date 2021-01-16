<?php


namespace patterns\AbstractFactory;


class TextFactory extends AbstractFactory
{

    public function createHeader(): HeaderInterface
    {
        return new TextHeader();
    }

    public function createBody(): BodyInterface
    {
        return new TextBody();
    }

    public function createFooter(): FooterInterface
    {
        return new TextFooter();
    }
}