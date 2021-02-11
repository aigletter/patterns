<?php


namespace patterns\ChainOfResponsibility;


class SecondHandler extends HandlerAbstract
{
    public function handle(Request $request): Response
    {
        echo "Second handler\n";

        if (!$request->bool) {
            return new Response();
        }

        return parent::handle($request);
    }
}