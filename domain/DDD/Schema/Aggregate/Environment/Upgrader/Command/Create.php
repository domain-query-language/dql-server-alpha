<?php namespace Domain\DDD\Schema\Aggregate\Environment\Upgrader\Command;

use BoundedContext\Contracts\Schema\Schema;
use BoundedContext\Contracts\Schema\Upgrader;
use BoundedContext\Schema\Upgrader\AbstractUpgrader;

class Create extends AbstractUpgrader implements Upgrader
{
    protected function when_version_0(Schema $schema)
    {
        $schema->add('name', function($name) {
            return '';
        });
    }
}
