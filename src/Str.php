<?php

namespace Inilim\String;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method string|false translatePhpUrlConstantToKey(int $constant)
 * @method bool isUrl(mixed $value, array $protocols = [])
 * @method string[] getURLProtocolsAsArray()
 * @method string getURLProtocolsAsString()
 * @method string[]|array{} getSegmentsPath(string $path)
 * @method int getCountSegmentsPath(string $path)
 * @method ?string getSegmentPath(string $path)
 * @method array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string} parseURL(string $url)
 */
class Str extends LazyMethodAbstract
{
    protected const NAMESPACE = 'Inilim\String\Method';
    protected const ALIAS = [
        'match'      => 'Match_',
        'firstUpper' => 'Ucfirst',
        'firstLower' => 'Lcfirst',
    ];
}
