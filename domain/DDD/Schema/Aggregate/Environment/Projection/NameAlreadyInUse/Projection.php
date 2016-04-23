<?php namespace Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;

use Domain\DDD\Schema\ValueObject\Name;

interface Projection extends \BoundedContext\Contracts\Projection\Projection
{
    /**
     * Adds a new name
     *
     * @param Name $name
     * @return void
     */
    public function create(Name $name);
}
