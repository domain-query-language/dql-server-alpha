<?php

return [

    'application' => [
        /*
        \App\Projections\Users\Projection::class =>
            \Infrastructure\App\Projection\Users\Projection::class,
        */
    ],

    'domain' => [
        \Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse\Projection::class =>
            \Infrastructure\Domain\DDD\Schema\Aggregate\Environment\Projection\NameAlreadyInUse\Projection::class
    ],
];
