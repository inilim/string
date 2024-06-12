<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

class CreateRandomStringsNormally
{
    /**
     * Indicate that random strings should be created normally and not using a custom factory.
     */
    public function __invoke(): void
    {
        Str::property()->random_string_factory = null;
    }
}
