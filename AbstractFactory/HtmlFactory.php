<?php


namespace patterns\AbstractFactory;


class HtmlFactory extends AbstractFactory
{

    public function createHeader(): HeaderInterface
    {
        return new HtmlHeader();
    }

    public function createBody(): BodyInterface
    {
        return new HtmlBody();
    }

    public function createFooter(): FooterInterface
    {
        return new HtmlFooter();
    }
}