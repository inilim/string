<?php

namespace Inilim\String\Method;

/**
 * Swap multiple keywords in a string with other keywords.
 */
class Swap
{
    public function __invoke(array $map, string $subject): string
    {
        return \strtr($subject, $map);
    }

    /**
     * Swap multiple keywords in a string with other keywords.
     */
    // public function swap(array $map, string $subject): string
    // {
    //     return \strtr($subject, $map);
    // }
}
