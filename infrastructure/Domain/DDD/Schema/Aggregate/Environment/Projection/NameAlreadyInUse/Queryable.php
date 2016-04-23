<?php namespace Infrastructure\Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;

use Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse;
use Domain\DDD\Schema\ValueObject\Name;
use BoundedContext\Laravel\Illuminate\Projection\AbstractQueryable;

class Queryable extends AbstractQueryable implements NameAlreadyInUse\Queryable
{
    protected $table = 'domain_ddd_schema_environment_name_already_in_use';
    
    public function name_already_in_use(Name $name) 
    {
        $names = $this->query()
            ->where('name', $name->value())
            ->count();

        return $names > 0;
    }
}
