<?php namespace Domain\DDD\Schema\Aggregate\Environment\Upgrader\Command;

use BoundedContext\Contracts\Schema\Schema;
use BoundedContext\Contracts\Schema\Upgrader;
use BoundedContext\Schema\Upgrader\AbstractUpgrader;

class Using extends AbstractUpgrader implements Upgrader
{
    protected function when_version_0(Schema $schema)
    {

    }
}
