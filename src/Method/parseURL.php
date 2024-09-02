<?php

namespace Inilim\String\Method;

/**
 * new parse_url
 * @return array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string}
 */
function parseURL(string $url): array
{
    $r = \parse_url($url);
    if (!\is_array($r)) $r = [];

    return [
        'protocol' => $r['scheme']   ?? null,
        'login'    => $r['user']     ?? null,
        'password' => $r['pass']     ?? null,
        'domain'   => $r['host']     ?? null,
        'port'     => $r['port']     ?? null,
        'path'     => $r['path']     ?? null,
        'query'    => $r['query']    ?? null,
        'anchor'   => $r['fragment'] ?? null,
    ];
}

    // scheme > protocol - например, http
    // host > domain
    // port
    // user
    // pass
    // path
    // query - после знака вопроса ?
    // fragment - после знака решётки #
