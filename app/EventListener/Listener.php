<?php

namespace App\EventListener;

/**
 * Class Listener
 * @package App\EventListener
 */
interface Listener
{
    /**
     * @param Event $event
     * @return mixed
     */
    public function handle(Event $event);
}