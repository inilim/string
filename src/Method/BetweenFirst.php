<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Get the smallest possible portion of a string between two given values.
 */
class BetweenFirst
{
    public function __invoke(string $subject, string $from, string $to): string
    {
        if ($from === '' || $to === '') {
            return $subject;
        }

        return Str::before(Str::after($subject, $from), $to);
    }
}
