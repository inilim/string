<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

class CreateRandomStringsUsing
{
    /**
     * Set the callable that will be used to generate random strings.
     */
    public function __invoke(callable|null $factory = null): void
    {
        Str::property()->random_string_factory = $factory;
    }
}
