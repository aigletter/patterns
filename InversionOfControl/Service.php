<?php


namespace patterns\InversionOfControl;


class Service
{
    public function getDirectItems()
    {
        return [
            'a' => 'b',
            'c' => 'd',
        ];
    }

    public function getCallbackItems(callable $callback)
    {
        // 1000 строк кода
        // 100 вызовов других методов

        $items = $this->getDirectItems();
        // 1000 строк кода
        // 100 вызовов других методов

        $result = $callback($items);

        // 1000 строк кода
        // 100 вызовов других методов

        return $result;
    }
}