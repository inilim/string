<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

class CreateRandomStringsUsingSequence
{
    /**
     * Set the sequence that will be used to generate random strings.
     */
    public function __invoke(array $sequence, callable|null $when_missing = null): void
    {
        $next = 0;

        $when_missing ??= function ($length) use (&$next) {
            $factory_cache = Str::property()->random_string_factory;

            Str::property()->random_string_factory = null;

            $random_string = Str::random($length);

            Str::property()->random_string_factory = $factory_cache;

            $next++;

            return $random_string;
        };

        Str::createRandomStringsUsing(function ($length) use (&$next, $sequence, $when_missing) {
            if (\array_key_exists($next, $sequence)) {
                return $sequence[$next++];
            }

            return $when_missing($length);
        });
    }
}
