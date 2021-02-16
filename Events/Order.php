<?php


namespace patterns\Events;


class Order
{
    public const EVENT_UPDATE_STATUS = 'updateStatus';

    public const EVENT_TEST_SOMETHING = 'testSomething';

    protected $eventManager;

    protected $status;

    public function __construct(EventManager $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function changeStatus($status)
    {
        $this->status = $status;

        $this->eventManager->notify(self::EVENT_UPDATE_STATUS, $this);
    }

    public function testSomething()
    {
        $this->eventManager->notify(self::EVENT_TEST_SOMETHING, $this);
    }
}