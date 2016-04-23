<?php

namespace App\Factory;

use Domain\DDD\Schema\Aggregate\Environment\Command;
use BoundedContext\Contracts\Generator;
use Domain\DDD\Schema\ValueObject\Name;

class Command
{
    private $id_generator;
    
    public function __construct(Generator\Identifier $id_generator)
    {
        $this->id_generator = $id_generator;
    }
    
    public function ast($ast)
    {
        $command = $ast->command;
        
        switch ($command) {
            case "CreateEnvironment":
                return new Command\Create(
                    $this->id_generator->generate(),
                    new Name($ast->name)
                );             
        }
        
    }
}

