<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Get the portion of a string between two given values.
 */
class Between
{
    public function __invoke(string $subject, string $from, string $to): string
    {
        if ($from === '' || $to === '') return $subject;

        return Str::beforeLast(Str::after($subject, $from), $to);
    }
}
