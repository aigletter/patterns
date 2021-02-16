<?php


namespace patterns\Observer;


class Order implements ObserverInterface
{
    protected $status;

    /**
     * @var ListenerInterface[]
     */
    protected $listeners = [];

    public function changeStatus($status)
    {
        $this->status = $status;

        $this->notify();
    }

    protected function notify()
    {
        foreach ($this->listeners as $key => $listener) {
            $listener->listen($this);
        }
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function attach(ListenerInterface $listener)
    {
        $id = $listener->getId();
        $this->listeners[$id] = $listener;
    }

    public function detach(ListenerInterface $listener)
    {
        $id = $listener->getId();
        unset($this->listeners[$id]);
    }
}