<?php


namespace patterns\Decorator;


class SmsDecorator extends DecoratorAbstract
{
    public function notify(string $to, $error)
    {
        // TODO
        $this->service->notify($to, $error);
        // TODO


        echo "sent sms\n";
    }
}