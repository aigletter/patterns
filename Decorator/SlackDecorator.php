<?php


namespace patterns\Decorator;


class SlackDecorator extends DecoratorAbstract
{
    public function notify(string $to, $error)
    {
        // TODO
        $this->service->notify($to, $error);

        echo "sent message to slack\n";
    }
}