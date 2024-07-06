<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Indicate that random strings should be created normally and not using a custom factory.
 */
function createRandomStringsNormally(): void
{
    Str::property()->random_string_factory = null;
}
