<?php

namespace Inilim\String\Method;

/**
 * Replace the patterns matching the given regular expression.
 */
class ReplaceMatches
{
    /**
     * @return string|string[]|null
     */
    public function __invoke(
        string $pattern,
        \Closure|string $replace,
        array|string $subject,
        int $limit = -1
    ): string|array|null {
        if ($replace instanceof \Closure) {
            return \preg_replace_callback($pattern, $replace, $subject, $limit);
        }

        return \preg_replace($pattern, $replace, $subject, $limit);
    }

    /**
     * Replace the patterns matching the given regular expression.
     * @return string|string[]|null
     */
    // public function replaceMatches(string $pattern, \Closure|string $replace, array|string $subject, int $limit = -1): string|array|null
    // {
    //     if ($replace instanceof \Closure) {
    //         return \preg_replace_callback($pattern, $replace, $subject, $limit);
    //     }

    //     return \preg_replace($pattern, $replace, $subject, $limit);
    // }
}
