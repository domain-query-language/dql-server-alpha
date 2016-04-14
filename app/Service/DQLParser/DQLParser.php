<?php namespace App\Service\DQLParser;

interface DQLParser 
{    
    public function parse($dql_statement);
}
