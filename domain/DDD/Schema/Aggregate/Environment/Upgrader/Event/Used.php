<?php namespace Domain\DDD\Schema\Aggregate\Environment\Upgrader\Event;

use BoundedContext\Contracts\Schema\Schema;
use BoundedContext\Contracts\Schema\Upgrader;
use BoundedContext\Schema\Upgrader\AbstractUpgrader;

class Used extends AbstractUpgrader implements Upgrader
{
    protected function when_version_0(Schema $schema)
    {

    }
}
