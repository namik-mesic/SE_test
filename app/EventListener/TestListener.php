<?php

namespace App\EventListener;

/**
 * Class TestListener
 * @package App\EventListener
 */
class TestListener implements Listener
{
    /**
     * @param Event $event
     * @return mixed
     */
    public function handle(Event $event)
    {
        dump('Hello world, an event has happened, umm, this is the class of the event ' . get_class($event));
    }
}