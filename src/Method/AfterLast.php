<?php

namespace Inilim\String\Method;

/**
 * Return the remainder of a string after the last occurrence of a given value.
 */
class AfterLast
{
    public function __invoke(string $subject, string $search): string
    {
        if ($search === '') return $subject;

        $position = \strrpos($subject, $search);

        if ($position === false) return $subject;

        return \substr($subject, $position + \strlen($search));
    }
}
