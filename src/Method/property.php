<?php

namespace Inilim\String\Method;

/**
 * @return array{snake_cache:array,camel_cache:array,studly_cache:array,random_string_factory:callable|null}
 */
function property(): \stdClass
{
    static $c = null;

    if ($c !== null) return $c;

    $c = new \stdClass;

    /**
     * The cache of snake-cased words.
     * @var array
     */
    $c->snake_cache = [];

    /**
     * The cache of camel-cased words.
     * @var array
     */
    $c->camel_cache = [];

    /**
     * The cache of studly-cased words.
     * @var array
     */
    $c->studly_cache = [];

    /**
     * The callback that should be used to generate random strings.
     * @var callable|null
     */
    $c->random_string_factory = null;

    return $c;
}
