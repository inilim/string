<?php

namespace Inilim\String\Method;

/**
 * Replace the first occurrence of a given value in the string.
 */
class ReplaceFirst
{
    public function __invoke(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        $position = \strpos($subject, $search);

        if ($position !== false) {
            return \substr_replace($subject, $replace, $position, \strlen($search));
        }

        return $subject;
    }

    /**
     * Replace the first occurrence of a given value in the string.
     */
    // public function replaceFirst(string $search, string $replace, string $subject): string
    // {
    //     if ($search === '') return $subject;

    //     $position = \strpos($subject, $search);

    //     if ($position !== false) {
    //         return \substr_replace($subject, $replace, $position, \strlen($search));
    //     }

    //     return $subject;
    // }
}
