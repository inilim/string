<?php

namespace Inilim\String\Method;

class Property
{
    /**
     * The cache of snake-cased words.
     *
     * @var array
     */
    public $snake_cache = [];

    /**
     * The cache of camel-cased words.
     *
     * @var array
     */
    public $camel_cache = [];

    /**
     * The cache of studly-cased words.
     *
     * @var array
     */
    public $studly_cache = [];

    /**
     * The callback that should be used to generate random strings.
     *
     * @var callable|null
     */
    public $random_string_factory;

    public function __invoke(): self
    {
        return $this;
    }
}
