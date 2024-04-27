<?php

namespace Inilim\String;

use Inilim\LazyMethod\LazyMethodAbstract;

class Str extends LazyMethodAbstract
{
    protected const NAMESPACE = 'Inilim\String\Method';
    protected const ALIAS = [
        'match' => 'Match_',
    ];
}
