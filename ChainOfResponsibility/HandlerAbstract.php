<?php


namespace patterns\ChainOfResponsibility;


abstract class HandlerAbstract
{
    protected $next;

    public function with(HandlerAbstract $next)
    {
        $this->next = $next;
    }

    public function handle(Request $request): Response
    {
        // TODO
        if ($this->next) {
            return $this->next->handle($request);
        }
    }
}