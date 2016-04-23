<?php namespace Infrastructure\Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;

use BoundedContext\Laravel\Illuminate\Projection\AbstractProjection;
use Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;
use Domain\DDD\Schema\ValueObject\Name;

class Projection extends AbstractProjection implements NameAlreadyInUse\Projection
{
    protected $table = 'domain_ddd_schema_environment_name_already_in_use';

    /**
     * @var Queryable $queryable
     */
    protected $queryable;
    
    public function create(Name $name) 
    {
        $this->query()->insert([
            'name' => $name->value()
        ]);
    }
}
