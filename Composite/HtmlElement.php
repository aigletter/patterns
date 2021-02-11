<?php


namespace patterns\Composite;


abstract class HtmlElement implements RenderInterface
{
    protected $name;

    protected $text;

    public function __construct($name, $text = '')
    {
        $this->name = $name;
        $this->text = $text;
    }
}