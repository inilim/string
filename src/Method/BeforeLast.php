<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Get the portion of a string before the last occurrence of a given value.
 */
function beforeLast(string $subject, string $search): string
{
    if ($search === '') return $subject;
    $pos = \mb_strrpos($subject, $search);

    if ($pos === false) return $subject;
    return Str::substr($subject, 0, $pos);
}
