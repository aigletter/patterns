<?php


namespace patterns\Composite;


abstract class HtmlElementLeaf extends HtmlElement
{
    public function render(): string
    {
        return $this->name . ' ' . $this->text . PHP_EOL;
    }
}