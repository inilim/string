<?php

namespace Inilim\String\Method;

/**
 * Replace the last occurrence of a given value in the string.
 */
class ReplaceLast
{
    public function __invoke(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        $position = \strrpos($subject, $search);

        if ($position !== false) {
            return \substr_replace($subject, $replace, $position, \strlen($search));
        }

        return $subject;
    }

    /**
     * Replace the last occurrence of a given value in the string.
     */
    // public function replaceLast(string $search, string $replace, string $subject): string
    // {
    //     if ($search === '') return $subject;

    //     $position = \strrpos($subject, $search);

    //     if ($position !== false) {
    //         return \substr_replace($subject, $replace, $position, \strlen($search));
    //     }

    //     return $subject;
    // }
}
