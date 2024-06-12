<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Replace the last occurrence of a given value if it appears at the end of the string.
 */
class ReplaceEnd
{
    public function __invoke(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        if (Str::endsWith($subject, $search)) {
            return Str::replaceLast($search, $replace, $subject);
        }

        return $subject;
    }

    /**
     * Replace the last occurrence of a given value if it appears at the end of the string.
     */
    // public function replaceEnd(string $search, string $replace, string $subject): string
    // {
    //     if ($search === '') return $subject;

    //     if ($this->endsWith($subject, $search)) {
    //         return $this->replaceLast($search, $replace, $subject);
    //     }

    //     return $subject;
    // }
}
