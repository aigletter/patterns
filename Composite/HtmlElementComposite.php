<?php


namespace patterns\Composite;


abstract class HtmlElementComposite extends HtmlElement
{
    protected $children = [];

    public function getChildren()
    {
        return $this->children;
    }

    public function addChild($key, RenderInterface $element)
    {
        $this->children[$key] = $element;
    }

    public function removeChildren($key)
    {
        unset($this->children[$key]);
    }

    public function getChild($key)
    {
        return $this->children[$key];
    }

    public function render(): string
    {
        $output = $this->name . ' ' . $this->text . PHP_EOL;

        foreach ($this->children as $child) {
            $output .= $child->render();
        }

        return $output;
    }
}