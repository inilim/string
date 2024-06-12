<?php

namespace Inilim\String\Method;

/**
 * Replace the given value in the given string.
 */
class Replace
{
    /**
     * @param  string|string[]  $search
     * @param  string|string[]  $replace
     * @param  string|string[]  $subject
     * @return string|string[]
     */
    public function __invoke(
        string|array $search,
        string|array $replace,
        string|array $subject,
        bool $case_sensitive = true
    ): string|array {
        return $case_sensitive
            ? \str_replace($search, $replace, $subject)
            : \str_ireplace($search, $replace, $subject);
    }

    /**
     * Replace the given value in the given string.
     * @param  string|string[]  $search
     * @param  string|string[]  $replace
     * @param  string|string[]  $subject
     * @return string|string[]
     */
    // public function replace(string|array $search, string|array $replace, string|array $subject, bool $case_sensitive = true): string|array
    // {
    //     return $case_sensitive
    //         ? \str_replace($search, $replace, $subject)
    //         : \str_ireplace($search, $replace, $subject);
    // }
}
