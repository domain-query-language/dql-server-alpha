<?php namespace Domain\DDD\Schema\Aggregate\Environment;

use BoundedContext\Sourced\Aggregate\State\AbstractState;

class State extends AbstractState implements \BoundedContext\Contracts\Sourced\Aggregate\State\State
{
    protected function when_ddd_schema_environment_created(
        Projection $projection,
        Event\Created $event
    )
    {
        $projection->create();
    }
}
