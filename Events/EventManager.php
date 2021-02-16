<?php


namespace patterns\Events;


class EventManager implements SubjectInterface
{
    /**
     * @var ObserverInterface[]
     */
    protected $listeners = [];

    public function attach(string $event, ObserverInterface $observer)
    {
        $this->listeners[$event][] = $observer;
    }

    public function detach(string $event, ObserverInterface $listener)
    {
        // TODO: Implement detach() method.
    }

    public function notify($event, $instance)
    {
        $listeners = $this->listeners[$event] ?? [];
        foreach ($listeners as $listener) {
            $listener->update($event, $instance);
        }
    }
}