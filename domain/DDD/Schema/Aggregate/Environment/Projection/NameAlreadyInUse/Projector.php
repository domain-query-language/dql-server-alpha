<?php namespace Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;

use BoundedContext\Projection\AbstractProjector;
use BoundedContext\Contracts\Event\Snapshot\Snapshot;

use Domain\DDD\Schema\Aggregate\Environment\Event;

class Projector extends AbstractProjector
{
    protected function when_shopping_cart_created(
        Projection $projection,
        Event\Created $event,
        Snapshot $snapshot
    )
    {
        $projection->create($event->name);
    }
}
