<?php namespace Domain\Shopping\Aggregate\Cart\Invariant;

use BoundedContext\Business\Invariant\AbstractInvariant;
use BoundedContext\Contracts\Business\Invariant\Invariant;
use Domain\Shopping\Aggregate\Cart\Projection as Queryable;
use Domain\DDD\Schema\ValueObject\Name;

class NameAlreadyInUse extends AbstractInvariant implements Invariant
{
    private $name;
    
    protected function assumptions(Name $name)
    {
        $this->name = $name;
    }
    
    protected function satisfier(Queryable $queryable)
    {
        return (!$queryable->name_already_in_use(
            $this->name
        ));
    }
}
