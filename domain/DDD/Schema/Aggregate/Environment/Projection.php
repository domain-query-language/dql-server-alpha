<?php namespace Domain\DDD\Schema\Aggregate\Environment;

use BoundedContext\Contracts\Projection\Projection as ProjectionContract;
use BoundedContext\Contracts\Projection\Queryable as QueryableContract;
use BoundedContext\Sourced\Aggregate\State\AbstractProjection;
use EventSourced\ValueObject\ValueObject\Boolean;

class Projection extends AbstractProjection implements ProjectionContract, QueryableContract
{
    /**
     * @var \EventSourced\ValueObject\ValueObject\Boolean
     */
    public $is_created;

    public function __construct()
    {
        $this->is_created = new Boolean(false);
    }

    public function create()
    {
        $this->is_created = new Boolean(true);
    }
}
