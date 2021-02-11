<?php


namespace patterns\ChainOfResponsibility;


class FirstHandler extends HandlerAbstract
{
    public function handle(Request $request): Response
    {
        echo "First handler\n";

        return parent::handle($request);
    }
}