<?php

namespace Inilim\String\Method;

/**
 * Return the remainder of a string after the first occurrence of a given value.
 */
class After
{
    public function __invoke(string $subject, string $search): string
    {
        return $search === '' ? $subject : \array_reverse(\explode($search, $subject, 2))[0];
    }
}
