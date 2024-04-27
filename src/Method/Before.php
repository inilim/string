<?php

namespace Inilim\String\Method;

/**
 * Get the portion of a string before the first occurrence of a given value.
 */
class Before
{
    public function __invoke(string $subject, string $search): string
    {
        if ($search === '') return $subject;

        $result = \strstr($subject, $search, true);

        return $result === false ? $subject : $result;
    }
}
