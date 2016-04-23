<?php

namespace App\Factory;

class Command
{
    public function ast(AST $ast)
    {
        $command = $ast->command;
    }
}

