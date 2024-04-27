<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Generate a URL friendly "slug" from a given string.
 */
class Slug
{
    /**
     * @param  array<string, string>  $dictionary
     */
    public function __invoke(string $title, string $separator = '-', string|null $language = 'en', array $dictionary = ['@' => 'at']): string
    {
        $title = $language ? Str::ascii($title, $language) : $title;

        // Convert all dashes/underscores into separator
        $flip = $separator === '-' ? '_' : '-';

        $title = \preg_replace('![' . \preg_quote($flip) . ']+!u', $separator, $title);

        // Replace dictionary words
        foreach ($dictionary as $key => $value) {
            $dictionary[$key] = $separator . $value . $separator;
        }

        $title = \str_replace(\array_keys($dictionary), \array_values($dictionary), $title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace
        $title = \preg_replace('![^' . \preg_quote($separator) . '\pL\pN\s]+!u', '', Str::lower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = \preg_replace('![' . \preg_quote($separator) . '\s]+!u', $separator, $title);

        return \trim($title, $separator);
    }
}