<?php

namespace Inilim\String\Method;

/**
 * Get the character at the specified index.
 */
class CharAt
{
    public function __invoke(string $subject, int $index): string|false
    {
        $length = \mb_strlen($subject);

        if ($index < 0 ? $index < -$length : $index > $length - 1) {
            return false;
        }

        return \mb_substr($subject, $index, 1);
    }
}
