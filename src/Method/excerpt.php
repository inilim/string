<?php

namespace Inilim\String\Method;

use Inilim\String\Str;

/**
 * Extracts an excerpt from text that matches the first instance of a phrase.
 * TODO не проверял его, ии его преобразовала
 */
function excerpt(string $text, string $phrase = '', array $options = []): ?string
{
    $radius = $options['radius'] ?? 100;
    $omission = $options['omission'] ?? '...';

    \preg_match('/^(.*?)(' . \preg_quote((string) $phrase, '/') . ')(.*)$/iu', (string) $text, $matches);

    if (empty($matches)) {
        return null;
    }

    $start = Str::ltrim($matches[1]);

    $start_with_radius = \mb_substr($start, \max(\mb_strlen($start, 'UTF-8') - $radius, 0), $radius, 'UTF-8');
    $start_with_radius = Str::ltrim($start_with_radius);

    if ($start_with_radius !== $start) {
        $start_with_radius = $omission . $start_with_radius;
    }

    $end = Str::rtrim($matches[3]);

    $end_with_radius = \mb_substr($end, 0, $radius, 'UTF-8');
    $end_with_radius = Str::rtrim($end_with_radius);

    if ($end_with_radius !== $end) {
        $end_with_radius = $end_with_radius . $omission;
    }

    return $start_with_radius . $matches[2] . $end_with_radius;
}

/**
 * Extracts an excerpt from text that matches the first instance of a phrase.
 *
 * @param  string  $text
 * @param  string  $phrase
 * @param  array  $options
 * @return string|null
 */
    // public static function excerpt($text, $phrase = '', $options = [])
    // {
    //     $radius = $options['radius'] ?? 100;
    //     $omission = $options['omission'] ?? '...';

    //     preg_match('/^(.*?)(' . preg_quote((string) $phrase, '/') . ')(.*)$/iu', (string) $text, $matches);

    //     if (empty($matches)) {
    //         return null;
    //     }

    //     $start = ltrim($matches[1]);

    //     $start = str(mb_substr($start, max(mb_strlen($start, 'UTF-8') - $radius, 0), $radius, 'UTF-8'))->ltrim()->unless(
    //         fn ($startWithRadius) => $startWithRadius->exactly($start),
    //         fn ($startWithRadius) => $startWithRadius->prepend($omission),
    //     );

    //     $end = rtrim($matches[3]);

    //     $end = str(mb_substr($end, 0, $radius, 'UTF-8'))->rtrim()->unless(
    //         fn ($endWithRadius) => $endWithRadius->exactly($end),
    //         fn ($endWithRadius) => $endWithRadius->append($omission),
    //     );

    //     return $start->append($matches[2], $end)->toString();
    // }
