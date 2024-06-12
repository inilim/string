<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Replace the first occurrence of the given value if it appears at the start of the string.
 */
class ReplaceStart
{
    public function __invoke(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        if (Str::startsWith($subject, $search)) {
            return Str::replaceFirst($search, $replace, $subject);
        }

        return $subject;
    }

    /**
     * Replace the first occurrence of the given value if it appears at the start of the string.
     */
    // public function replaceStart(string $search, string $replace, string $subject): string
    // {
    //     if ($search === '') return $subject;

    //     if ($this->startsWith($subject, $search)) {
    //         return $this->replaceFirst($search, $replace, $subject);
    //     }

    //     return $subject;
    // }
}
