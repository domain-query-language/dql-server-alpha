<?php namespace Domain\DDD\Schema\ValueObject;

use EventSourced\ValueObject\ValueObject\Type\AbstractSingleValue;

class Name extends AbstractSingleValue 
{
    protected function validator()
    {
        return parent::validator()->alnum('-_')->noWhitespace();
    }
}

