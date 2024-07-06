<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Set the callable that will be used to generate random strings.
 */
function createRandomStringsUsing(callable|null $factory = null): void
{
    Str::property()->random_string_factory = $factory;
}
