<?php

namespace Tests\Resources;

use PAMI\Listener\IEventListener;
use PAMI\Message\Event\EventMessage;

class SomeListenerClass implements IEventListener
{
    public static ?EventMessage $event = null;

    public function handle(EventMessage $event): void
    {
        self::$event = $event;
    }
}
