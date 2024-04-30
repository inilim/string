<?php

namespace Inilim\String;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method string|false TranslatePhpUrlConstantToKey(int $constant)
 */
class Str extends LazyMethodAbstract
{
    protected const NAMESPACE = 'Inilim\String\Method';
    protected const ALIAS = [
        'match' => 'Match_',
    ];
}
