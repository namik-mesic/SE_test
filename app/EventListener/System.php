<?php

namespace App\EventListener;

/**
 * Class System
 * @package App\EventListener
 */
class System
{
    /**
     * @var
     */
    protected $listeners = [];

    /**
     * @param $listener
     * @param $event
     */
    public function register($listener, $event)
    {
        if (!isset($this->listeners[$listener]))
            $this->listeners[$listener] = [];

        array_push($this->listeners[$listener], $event);
    }

    /**
     * @param Event $event
     */
    public function fire(Event $event)
    {
        foreach ($this->listeners as $listener => $events)
            if (in_array(get_class($event), $events))
            {
                /** @var Listener $listenerObject */
                $listenerObject = new $listener;
                $listenerObject->handle($event);
            }
    }
}